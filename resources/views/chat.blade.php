<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>TeachMe - Messages</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Lexend"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="relative flex h-screen w-full flex-col overflow-hidden">
    
    <!-- Top Navigation Bar -->
    <header class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-3 z-10">
        <div class="flex items-center gap-8">
            <div class="flex items-center gap-2 text-primary">
                <div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-tight">TeachMe</h2>
            </div>
            <div class="hidden md:flex relative w-64">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">search</span>
                <input class="w-full pl-10 pr-4 py-2 bg-slate-100 dark:bg-slate-800 border-none rounded-lg text-sm focus:ring-2 focus:ring-primary/50" placeholder="Search courses..." type="text"/>
            </div>
        </div>
        <div class="flex items-center gap-6">
            <nav class="hidden lg:flex items-center gap-6">
                <a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Dashboard</a>
                <a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Courses</a>
                <a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Mentors</a>
                <a class="text-primary text-sm font-semibold border-b-2 border-primary pb-1" href="#">Messages</a>
            </nav>
            <div class="flex items-center gap-3">
                <button class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-primary transition-all">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <button class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-primary transition-all">
                    <span class="material-symbols-outlined">settings</span>
                </button>
                <div class="h-10 w-10 rounded-full bg-gradient-to-tr from-primary to-blue-400 border-2 border-white dark:border-slate-700 shadow-sm"></div>
            </div>
        </div>
    </header>

    <main class="flex flex-1 overflow-hidden">
        <!-- Sidebar Navigation -->
        <aside class="w-20 lg:w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 flex flex-col py-6">
            <div class="flex flex-col gap-2 px-4">
                <a class="flex items-center gap-3 px-3 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
                    <span class="material-symbols-outlined">grid_view</span>
                    <span class="hidden lg:block font-medium">Overview</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-3 rounded-xl bg-primary/10 text-primary transition-colors" href="#">
                    <span class="material-symbols-outlined">chat_bubble</span>
                    <span class="hidden lg:block font-medium">Messages</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
                    <span class="material-symbols-outlined">group</span>
                    <span class="hidden lg:block font-medium">Community</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
                    <span class="material-symbols-outlined">auto_stories</span>
                    <span class="hidden lg:block font-medium">Resources</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
                    <span class="material-symbols-outlined">calendar_today</span>
                    <span class="hidden lg:block font-medium">Schedule</span>
                </a>
            </div>
            <div class="mt-auto px-4">
                <div class="hidden lg:block p-4 rounded-2xl bg-gradient-to-br from-primary to-blue-600 text-white">
                    <p class="text-xs opacity-80 mb-2">Pro Plan</p>
                    <h4 class="font-bold mb-3 leading-tight">Unlock all course materials</h4>
                    <button class="w-full py-2 bg-white text-primary text-xs font-bold rounded-lg hover:bg-slate-100 transition-colors">Upgrade Now</button>
                </div>
            </div>
        </aside>

        <!-- Chat Interface Split View -->
        <div class="flex flex-1 overflow-hidden bg-white dark:bg-slate-900">
            <!-- Conversation List -->
            <div class="w-full md:w-80 lg:w-96 flex flex-col border-r border-slate-200 dark:border-slate-800 h-full">
                <div class="p-4 space-y-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold">Chats</h2>
                        <button class="p-1.5 rounded-full bg-primary/10 text-primary">
                            <span class="material-symbols-outlined text-xl">edit_square</span>
                        </button>
                    </div>
                    <div class="flex p-1 bg-slate-100 dark:bg-slate-800 rounded-lg">
                        <button class="flex-1 py-1.5 text-sm font-semibold rounded-md bg-white dark:bg-slate-700 shadow-sm">All</button>
                        <button class="flex-1 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400">Mentors</button>
                        <button class="flex-1 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400">Groups</button>
                    </div>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-base">search</span>
                        <input id="chat-search" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm" placeholder="Search conversations..." type="text"/>
                    </div>
                </div>
                
                <!-- DYNAMIC SIDEBAR CONTACTS -->
                <div class="flex-1 overflow-y-auto custom-scrollbar">
                    @if(isset($contacts) && count($contacts) > 0)
                        @foreach($contacts as $contact)
                        <a href="{{ route('chat', ['user_id' => $contact->id]) }}" class="flex items-center gap-4 px-4 py-4 hover:bg-slate-50 dark:hover:bg-slate-800 cursor-pointer transition-colors border-b border-slate-100 dark:border-slate-800/50 {{ (isset($activeUser) && $activeUser->id == $contact->id) ? 'bg-primary/5 border-r-4 border-primary' : '' }}">
                            <div class="relative flex-shrink-0">
                                <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-slate-500 font-bold text-lg">
                                    {{ substr($contact->name, 0, 1) }}
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-baseline mb-0.5">
                                    <h4 class="text-sm font-semibold truncate">{{ $contact->name }}</h4>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    @else
                        <div class="p-4 text-center text-slate-500 text-sm">No contacts found.</div>
                    @endif
                </div>
            </div>

            <!-- Active Chat Area -->
            <div class="hidden md:flex flex-1 flex-col h-full bg-slate-50 dark:bg-slate-950 relative">
                <!-- Chat Header -->
                <div class="h-16 flex items-center justify-between px-6 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center font-bold text-slate-500">
                            {{ isset($activeUser) ? substr($activeUser->name, 0, 1) : '?' }}
                        </div>
                        <div>
                            <h3 class="text-sm font-bold leading-none">{{ isset($activeUser) ? $activeUser->name : 'Select a chat' }}</h3>
                            <div class="flex items-center gap-1.5 mt-1">
                                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                <span class="text-[10px] font-medium text-slate-500">Active</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <button class="p-2 text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">call</span>
                        </button>
                        <button class="p-2 text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">videocam</span>
                        </button>
                        <button class="p-2 text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">info</span>
                        </button>
                    </div>
                </div>

                <!-- DYNAMIC MESSAGE HISTORY -->
                <div id="chat-messages" class="flex-1 overflow-y-auto p-6 space-y-6 custom-scrollbar">
                    @if(isset($messages) && count($messages) > 0)
                        @foreach($messages as $msg)
                            @if($msg->sender_id == auth()->id())
                                <!-- Sent Message (Right Side) -->
                                <div class="flex flex-row-reverse items-end gap-3 max-w-[80%] ml-auto mt-4">
                                    <div class="space-y-1 text-right">
                                        <div class="bg-primary text-white p-4 rounded-2xl rounded-br-none shadow-md shadow-primary/20 text-sm inline-block text-left">
                                            {{ $msg->message }}
                                        </div>
                                        <div class="flex items-center justify-end gap-1">
                                            <span class="text-[10px] text-slate-400">{{ $msg->created_at->format('h:i A') }}</span>
                                            <span class="material-symbols-outlined text-primary text-[14px]">done_all</span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <!-- Received Message (Left Side) -->
                                <div class="flex items-end gap-3 max-w-[80%] mt-4">
                                    <div class="w-8 h-8 rounded-full flex-shrink-0 bg-slate-200 flex items-center justify-center font-bold text-xs text-slate-500">
                                        {{ isset($activeUser) ? substr($activeUser->name, 0, 1) : '?' }}
                                    </div>
                                    <div class="space-y-1">
                                        <div class="bg-white dark:bg-slate-800 p-4 rounded-2xl rounded-bl-none shadow-sm text-sm border border-slate-100 dark:border-slate-700/50 inline-block">
                                            {{ $msg->message }}
                                        </div>
                                        <span class="text-[10px] text-slate-400 ml-1">{{ $msg->created_at->format('h:i A') }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="flex justify-center mt-10">
                            <span class="px-4 py-2 bg-slate-100 dark:bg-slate-800 text-sm text-slate-500 rounded-full">No messages yet. Start the conversation!</span>
                        </div>
                    @endif
                </div>

                <!-- Message Input -->
<div class="p-6 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
    <div class="flex items-end gap-3">
        <button class="p-2.5 text-slate-400 hover:text-primary transition-colors">
            <span class="material-symbols-outlined">add_circle</span>
        </button>
        <button class="p-2.5 text-slate-400 hover:text-primary transition-colors">
            <span class="material-symbols-outlined">mood</span>
        </button>
        <div class="flex-1 relative">
            
            <textarea id="message-input" 
                class="w-full pl-4 pr-12 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-2xl text-sm focus:ring-primary focus:border-primary resize-none h-[48px] max-h-32 disabled:opacity-50 disabled:cursor-not-allowed" 
                @if(!isset($activeUser))
                    disabled placeholder="Select a contact to start chatting..."
                @else
                    placeholder="Type your message..."
                @endif
            ></textarea>
            
            <button id="send-button" 
                class="absolute right-2 bottom-1.5 p-2 bg-primary text-white rounded-xl hover:bg-blue-700 transition-all shadow-lg shadow-primary/20 disabled:opacity-50 disabled:cursor-not-allowed"
                @if(!isset($activeUser)) disabled @endif>
                <span class="material-symbols-outlined text-sm">send</span>
            </button>
            
        </div>
    </div>
</div>

            </div>
        </div>
    </main>
</div>

<!-- Load Pusher and Echo -->
<script src="https://js.pusher.com/8.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.15.3/dist/echo.iife.js"></script>

<script>
    // 1. Initialize Laravel Echo
    window.Echo = new Echo({
        broadcaster: 'pusher',
        key: '{{ env("PUSHER_APP_KEY") }}',
        cluster: '{{ env("PUSHER_APP_CLUSTER") }}',
        forceTLS: true
    });

    // 2. Safely pass IDs to JavaScript wrapped in strings
    const myUserId = "{{ auth()->id() }}"; 
    const currentReceiverId = "{{ optional($activeUser)->id }}";

    const chatContainer = document.getElementById('chat-messages');
    const messageInput = document.getElementById('message-input');
    const sendButton = document.getElementById('send-button');

    // Scroll to bottom on initial load
    if(chatContainer) {
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }

    // 3. Listen for incoming messages (Only run if user is logged in)
    if (myUserId !== '') {
        window.Echo.private(`chat.${myUserId}`)
            // ADDED THE DOT HERE (.MessageSentEvent)
            .listen('.MessageSentEvent', (e) => {
                
                // Print the event to the browser console so we know it arrived!
                console.log("BOOM! Event received from Pusher:", e);

                // Changed === to == so it doesn't fail if one is an integer and one is a string
                if(e.message.sender_id == currentReceiverId) {
                    appendMessageToUI(e.message.message, 'received');
                } else {
                    console.log("Message received, but it's from someone else. Sender:", e.message.sender_id);
                }
            });
    }

    // 4. The Core Send Function
    async function executeSendMessage() {
        const message = messageInput.value;
        
        // Prevent sending empty messages or sending to nobody
        if (!message.trim() || !currentReceiverId) return;

        // Clear the input box immediately
        messageInput.value = '';

        // Show the message on the screen
        appendMessageToUI(message, 'sent');

        try {
            await fetch('/api/messages/send', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    receiver_id: currentReceiverId,
                    message: message
                })
            });
        } catch (error) {
            console.error("Error sending message:", error);
            alert("Failed to send message. Please check your connection.");
        }
    }

    // 5. Event Listeners for Button Click AND Enter Key
    if (sendButton && messageInput) {
        // Handle clicking the send button
        sendButton.addEventListener('click', function(e) {
            e.preventDefault();
            executeSendMessage();
        });

        // Handle typing in the textarea
        messageInput.addEventListener('keydown', function (e) {
            // If they press Enter WITHOUT holding Shift, send the message
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault(); // Stop it from making a new line
                executeSendMessage();
            }
        });
    }

    // 6. UI Builder Function
    function appendMessageToUI(messageText, type) {
        const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        // Remove the "Start conversation" text if it exists
        const placeholder = chatContainer.querySelector('.flex.justify-center.mt-10');
        if(placeholder) placeholder.remove();

        // Convert newlines in the textarea to HTML break tags
        const formattedMessage = messageText.replace(/\n/g, '<br>');

        let html = '';

        if (type === 'sent') {
            html = `
            <div class="flex flex-row-reverse items-end gap-3 max-w-[80%] ml-auto mt-4">
                <div class="space-y-1 text-right">
                    <div class="bg-primary text-white p-4 rounded-2xl rounded-br-none shadow-md shadow-primary/20 text-sm inline-block text-left">
                        ${formattedMessage}
                    </div>
                    <div class="flex items-center justify-end gap-1">
                        <span class="text-[10px] text-slate-400">${time}</span>
                        <span class="material-symbols-outlined text-primary text-[14px]">done</span>
                    </div>
                </div>
            </div>`;
        } else {
            const activeUserInitial = '{{ isset($activeUser) ? substr($activeUser->name, 0, 1) : "?" }}';
            html = `
            <div class="flex items-end gap-3 max-w-[80%] mt-4">
                <div class="w-8 h-8 rounded-full flex-shrink-0 bg-slate-200 flex items-center justify-center font-bold text-xs text-slate-500">
                    ${activeUserInitial}
                </div>
                <div class="space-y-1">
                    <div class="bg-white dark:bg-slate-800 p-4 rounded-2xl rounded-bl-none shadow-sm text-sm border border-slate-100 dark:border-slate-700/50 inline-block">
                        ${formattedMessage}
                    </div>
                    <span class="text-[10px] text-slate-400 ml-1">${time}</span>
                </div>
            </div>`;
        }

        chatContainer.insertAdjacentHTML('beforeend', html);
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }

    // Chat Sidebar Search Logic
    const searchInput = document.getElementById('chat-search');
    const contactsContainer = document.querySelector('.custom-scrollbar'); // The sidebar list
    const originalContactsHTML = contactsContainer.innerHTML; // Save existing chats

    if(searchInput) {
        searchInput.addEventListener('input', async function(e) {
            const query = e.target.value;
            
            // If search is empty, restore recent chats
            if (query.length < 1) {
                contactsContainer.innerHTML = originalContactsHTML;
                return;
            }

            // Fetch users from database
            const res = await fetch(`/api/users/search?q=${query}`);
            const users = await res.json();

            // Clear sidebar and populate with search results
            contactsContainer.innerHTML = '';
            if(users.length === 0) {
                contactsContainer.innerHTML = `<div class="p-4 text-center text-slate-500 text-sm">No users found.</div>`;
            } else {
                users.forEach(user => {
                    contactsContainer.innerHTML += `
                        <a href="/chat?user_id=${user.id}" class="flex items-center gap-4 px-4 py-4 hover:bg-slate-50 dark:hover:bg-slate-800 border-b border-slate-100 dark:border-slate-800/50">
                            <div class="relative flex-shrink-0">
                                <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-primary font-bold text-lg">
                                    ${user.name.charAt(0)}
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-sm font-semibold truncate">${user.name}</h4>
                                <span class="text-xs text-slate-400">Click to chat</span>
                            </div>
                        </a>
                    `;
                });
            }
        });
    }
</script>
</body>
</html>