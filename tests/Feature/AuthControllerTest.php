<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    /* ==========================================
       REGISTRATION TESTS
       ========================================== */

    #[Test]
    public function a_mentor_can_register_successfully_and_gets_profile_and_dashboard_redirect()
    {
        $response = $this->post('/register', [
            'name' => 'Jane Mentor',
            'email' => 'jane@example.com',
            'password' => 'secret123',
            'password2' => 'secret123',
            'role' => 'Mentor',
        ]);

        $expectedId = 'M' . date('Y') . '01';

        $this->assertDatabaseHas('users', [
            'id' => $expectedId,
            'email' => 'jane@example.com',
            'role' => 'Mentor'
        ]);

        $this->assertDatabaseHas('mentors', [
            'id' => $expectedId,
            'user_id' => $expectedId,
            'title' => 'Professional Mentor'
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('mentor.dashboard'));
    }

    #[Test]
    public function a_student_can_register_successfully_and_gets_profile_and_dashboard_redirect()
    {
        $response = $this->post('/register', [
            'name' => 'Alex Student',
            'email' => 'alex@example.com',
            'password' => 'secret123',
            'password2' => 'secret123',
            'role' => 'Student',
        ]);

        $expectedId = 'S' . date('Y') . '01';

        $this->assertDatabaseHas('users', ['id' => $expectedId, 'email' => 'alex@example.com']);
        $this->assertDatabaseHas('students', ['id' => $expectedId, 'interest' => 'General']);

        $this->assertAuthenticated();
        $response->assertRedirect(route('student.dashboard'));
    }

    #[Test]
    public function registration_fails_if_passwords_do_not_match()
    {
        $response = $this->from('/register')->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password123',
            'password2' => 'different_password',
            'role' => 'Student',
        ]);

        $response->assertRedirect('/register');
        $response->assertSessionHas('error', 'Passwords do not match!');
        $this->assertGuest(); 
    }

    #[Test]
    public function registration_fails_validation_if_email_is_missing_or_invalid()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'not-an-email',
            'password' => 'secret123',
            'password2' => 'secret123',
            'role' => 'Student',
        ]);

        $response->assertSessionHasErrors(['email']);
        $this->assertGuest();
    }

    /* ==========================================
       LOGIN & LOGOUT TESTS
       ========================================== */

    #[Test]
    public function a_user_can_login_with_correct_credentials_and_redirects_based_on_role()
    {
        DB::table('users')->insert([
            'id' => 'S' . date('Y') . '01',
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('correct-password'),
            'role' => 'Student',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $response = $this->post('/login', [
            'email' => 'john@example.com',
            'password' => 'correct-password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('student.dashboard'));
    }

    #[Test]
    public function login_fails_with_wrong_credentials()
    {
        DB::table('users')->insert([
            'id' => 'S' . date('Y') . '01',
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('correct-password'),
            'role' => 'Student',
        ]);

        $response = $this->from('/login')->post('/login', [
            'email' => 'john@example.com',
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
        $response->assertRedirect('/login');
        $response->assertSessionHas('error', 'Wrong email or password');
    }

    #[Test]
    public function an_authenticated_user_can_logout()
    {
        $userId = 'M' . date('Y') . '01';
        
        DB::table('users')->insert([
            'id' => $userId,
            'name' => 'Logged In Mentor',
            'email' => 'mentor@example.com',
            'password' => Hash::make('password'),
            'role' => 'Mentor',
        ]);
        
        $userModel = User::find($userId);
    
        // Change .post() to .get() to match your routes
        $response = $this->actingAs($userModel)->get('/logout');
    
        $this->assertGuest();
        $response->assertRedirect('/');
    }
}