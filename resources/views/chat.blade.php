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
                
                <a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Courses</a>
                
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
        <aside class="w-20 lg:w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 flex flex-col py-6">
            @php
                // 1. Tentukan fallback route default jika tidak terdeteksi
                $dashboardRoute = 'student.dashboard'; 
                
                // 2. Cek role user yang sedang login secara realtime
                if (Auth::check()) {
                    if (strtolower(Auth::user()->role) === 'mentor') {
                        $dashboardRoute = 'mentor.dashboard';
                    } else {
                        $dashboardRoute = 'student.dashboard';
                    }
                }
            @endphp

            <div class="flex flex-col gap-2 px-4">
                <a class="flex items-center gap-3 px-3 py-3 rounded-xl transition-all {{ request()->routeIs($dashboardRoute) ? 'bg-primary/10 text-primary font-bold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800' }}" 
                   href="{{ route($dashboardRoute) }}">
                    <span class="material-symbols-outlined">grid_view</span>
                    <span class="hidden lg:block font-medium">Dashboard</span>
                </a>

                <a class="flex items-center gap-3 px-3 py-3 rounded-xl {{ request()->routeIs('chat') ? 'bg-primary/10 text-primary font-bold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800' }} transition-colors" 
                   href="{{ route('chat') }}">
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
        </aside>

        <div class="flex flex-1 overflow-hidden bg-white dark:bg-slate-900">
            <div class="w-full md:w-80 lg:w-96 flex flex-col border-r border-slate-200 dark:border-slate-800 h-full">
                <div class="p-4 space-y-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold">Chats</h2>
                        
                        <div class="flex items-center gap-2">
                            @if(strtolower(auth()->user()->role) === 'mentor')
                                <button onclick="document.getElementById('create-group-modal').classList.remove('hidden')" class="p-1.5 rounded-full bg-primary/10 text-primary hover:bg-primary/20 transition-colors" title="Create Group">
                                    <span class="material-symbols-outlined text-xl">group_add</span>
                                </button>
                            @endif
                            
                            <button class="p-1.5 rounded-full bg-primary/10 text-primary">
                                <span class="material-symbols-outlined text-xl">edit_square</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex p-1 bg-slate-100 dark:bg-slate-800 rounded-lg" id="chat-filters">
                        <button data-filter="all" class="filter-btn flex-1 py-1.5 text-sm font-semibold rounded-md bg-white dark:bg-slate-700 shadow-sm text-slate-900 dark:text-white transition-all">All</button>
                        <button data-filter="dms" class="filter-btn flex-1 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-slate-700 transition-all">Direct</button>
                        <button data-filter="groups" class="filter-btn flex-1 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-slate-700 transition-all">Groups</button>
                    </div>
                    
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-base">search</span>
                        <input id="chat-search" class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm" placeholder="Search conversations..." type="text"/>
                    </div>
                </div>
                
                <div class="flex-1 overflow-y-auto custom-scrollbar" id="contacts-container">
                    
                    @if(isset($groups) && count($groups) > 0)
                        <div class="group-header px-4 py-2 text-xs font-bold text-slate-400 uppercase tracking-wider">Groups</div>
                        @foreach($groups as $group)
                        <a href="{{ route('chat', ['group_id' => $group->id]) }}" class="chat-item is-group flex items-center gap-4 px-4 py-4 hover:bg-slate-50 dark:hover:bg-slate-800 cursor-pointer transition-colors border-b border-slate-100 dark:border-slate-800/50">
                            <div class="relative flex-shrink-0">
                                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-bold text-lg">
                                    <span class="material-symbols-outlined">forum</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex flex-col justify-center mb-0.5">
                                    <h4 class="text-sm font-semibold truncate">{{ $group->name }}</h4>
                                    <p class="text-xs text-primary truncate mt-0.5">Group Chat</p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        <div class="dm-header px-4 pt-4 pb-2 text-xs font-bold text-slate-400 uppercase tracking-wider">Direct Messages</div>
                    @endif

                    @if(isset($contacts) && count($contacts) > 0)
                        @foreach($contacts as $contact)
                        <a href="{{ route('chat', ['user_id' => $contact->id]) }}" class="chat-item is-dm flex items-center gap-4 px-4 py-4 hover:bg-slate-50 dark:hover:bg-slate-800 cursor-pointer transition-colors border-b border-slate-100 dark:border-slate-800/50 {{ (isset($activeUser) && $activeUser->id == $contact->id) ? 'bg-primary/5 border-r-4 border-primary' : '' }}">
                            <div class="relative flex-shrink-0">
                                <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-slate-500 font-bold text-lg">
                                    {{ substr($contact->name, 0, 1) }}
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex flex-col justify-center mb-0.5">
                            <h4 class="text-sm font-semibold truncate">{{ $contact->name }}</h4>
                            <p class="text-xs text-primary truncate mt-0.5">{{ $contact->shared_course ?? 'Connected via Course' }}</p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    @else
                        <div class="p-4 text-center text-slate-500 text-sm">No contacts found.</div>
                    @endif
                </div>
            </div>

            <div class="hidden md:flex flex-1 flex-col h-full bg-slate-50 dark:bg-slate-950 relative">
                <div class="h-16 flex items-center justify-between px-6 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
                    <div class="flex items-center gap-3 overflow-hidden">
                        @if(isset($activeGroup))
                            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined">forum</span>
                            </div>
                            <div class="min-w-0">
                                <h3 class="text-sm font-bold leading-none truncate">{{ $activeGroup->name }}</h3>
                                <p class="text-[11px] font-medium text-slate-500 mt-1.5 truncate max-w-md">
                                    {{ $activeGroup->users->pluck('name')->implode(', ') }}
                                </p>
                            </div>
                        @elseif(isset($activeUser))
                            <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center font-bold text-slate-500 shrink-0">
                                {{ substr($activeUser->name, 0, 1) }}
                            </div>
                            <div class="min-w-0">
                                <h3 class="text-sm font-bold leading-none truncate">{{ $activeUser->name }}</h3>
                                <div class="flex items-center gap-1.5 mt-1">
                                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                    <span class="text-[10px] font-medium text-slate-500">Active</span>
                                </div>
                            </div>
                        @else
                            <div class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-400 shrink-0">
                                <span class="material-symbols-outlined">chat</span>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold leading-none text-slate-500">Select a conversation</h3>
                            </div>
                        @endif
                    </div>
                    
                    <div class="flex items-center gap-4 shrink-0">
                        @if(isset($activeGroup))
                            <button onclick="document.getElementById('add-member-modal').classList.remove('hidden')" class="p-2 text-slate-400 hover:text-primary transition-colors" title="Add User">
                                <span class="material-symbols-outlined">person_add</span>
                            </button>
                            <button class="p-2 text-slate-400 hover:text-primary transition-colors" title="Group Settings">
                                <span class="material-symbols-outlined">settings</span>
                            </button>
                        @endif
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

                <div id="chat-messages" class="flex-1 overflow-y-auto p-6 space-y-6 custom-scrollbar">
                    @if(isset($messages) && count($messages) > 0)
                        @foreach($messages as $msg)
                            @if($msg->sender_id == auth()->id())
                                <div class="flex flex-row-reverse items-end gap-3 max-w-[80%] ml-auto mt-4">
                                    <div class="space-y-1 text-right">
                                        <div class="bg-primary text-white p-4 rounded-2xl rounded-br-none shadow-md shadow-primary/20 text-sm inline-block text-left">
                                            {{ $msg->message }}
                                        </div>
                                        <div class="flex items-center justify-end gap-1">
                                            <span class="message-time text-[10px] text-slate-400" data-time="{{ $msg->created_at->toIso8601String() }}"></span>
                                            <span class="material-symbols-outlined text-primary text-[14px]">done_all</span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="flex items-end gap-3 max-w-[80%] mt-4">
                                    <div class="w-8 h-8 rounded-full flex-shrink-0 bg-slate-200 flex items-center justify-center font-bold text-xs text-slate-500">
                                        {{ isset($activeUser) ? substr($activeUser->name, 0, 1) : 'U' }}
                                    </div>
                                    <div class="space-y-1">
                                        <div class="bg-white dark:bg-slate-800 p-4 rounded-2xl rounded-bl-none shadow-sm text-sm border border-slate-100 dark:border-slate-700/50 inline-block">
                                            {{ $msg->message }}
                                        </div>
                                        <span class="message-time text-[10px] text-slate-400 ml-1" data-time="{{ $msg->created_at->toIso8601String() }}"></span>
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
                                @if(!isset($activeUser) && !isset($activeGroup))
                                    disabled placeholder="Select a contact or group to start chatting..."
                                @else
                                    placeholder="Type your message..."
                                @endif
                            ></textarea>
                            
                            <button id="send-button" 
                                class="absolute right-2 bottom-1.5 p-2 bg-primary text-white rounded-xl hover:bg-blue-700 transition-all shadow-lg shadow-primary/20 disabled:opacity-50 disabled:cursor-not-allowed"
                                @if(!isset($activeUser) && !isset($activeGroup)) disabled @endif>
                                <span class="material-symbols-outlined text-sm">send</span>
                            </button>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>

@if(strtolower(auth()->user()->role) === 'mentor')
<div id="create-group-modal" class="hidden fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 flex items-center justify-center">
    <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-xl p-8 w-full max-w-md border border-slate-200 dark:border-slate-800">
        <h3 class="text-xl font-bold mb-6">Create Group Chat</h3>
        <form action="{{ route('groups.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Group Name</label>
                <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800" placeholder="e.g. Web Dev Cohort 1">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Select Course</label>
                <select name="course_id" required class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800">
                    <option value="">-- Choose a Course --</option>
                    @if(isset($myCourses))
                        @foreach($myCourses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                        @endforeach
                    @endif
                </select>
                <p class="text-xs text-slate-500 mt-2">All currently enrolled students will be added automatically.</p>
            </div>
            <div class="flex gap-3">
                <button type="button" onclick="document.getElementById('create-group-modal').classList.add('hidden')" class="flex-1 py-3 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-xl font-bold">Cancel</button>
                <button type="submit" class="flex-1 py-3 bg-primary text-white rounded-xl font-bold">Create Group</button>
            </div>
        </form>
    </div>
</div>
@endif

@if(isset($activeGroup))
<div id="add-member-modal" class="hidden fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 flex items-center justify-center">
    <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-xl p-8 w-full max-w-md border border-slate-200 dark:border-slate-800">
        <h3 class="text-xl font-bold mb-6">Add Member to {{ $activeGroup->name }}</h3>
        <form action="{{ route('groups.add', $activeGroup->id) }}" method="POST">
            @csrf
            <div class="mb-6">
                <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Select a Contact</label>
                <select name="user_id" required class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800">
                    <option value="">-- Choose User --</option>
                    @if(isset($contacts))
                        @foreach($contacts as $contact)
                            <option value="{{ $contact->id }}">{{ $contact->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="flex gap-3">
                <button type="button" onclick="document.getElementById('add-member-modal').classList.add('hidden')" class="flex-1 py-3 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-xl font-bold">Cancel</button>
                <button type="submit" class="flex-1 py-3 bg-primary text-white rounded-xl font-bold">Add to Group</button>
            </div>
        </form>
    </div>
</div>
@endif

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

    const myUserId = "{{ auth()->id() }}"; 
    const currentReceiverId = "{{ isset($activeUser) ? $activeUser->id : '' }}";
    const currentGroupId = "{{ isset($activeGroup) ? $activeGroup->id : '' }}"; 

    const chatContainer = document.getElementById('chat-messages');
    const messageInput = document.getElementById('message-input');
    const sendButton = document.getElementById('send-button');

    document.addEventListener("DOMContentLoaded", function() {
        const timeElements = document.querySelectorAll('.message-time');
        timeElements.forEach(el => {
            const utcTime = el.getAttribute('data-time');
            if (utcTime) {
                const localDate = new Date(utcTime);
                el.innerText = localDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            }
        });
    });

    if(chatContainer) {
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }

    if (myUserId !== '') {
        window.Echo.private(`chat.${myUserId}`)
            .listen('.MessageSentEvent', (e) => {
                if(e.message.sender_id == currentReceiverId && !e.message.group_id) {
                    appendMessageToUI(e.message.message, 'received');
                }
            });
    }

    if (currentGroupId !== '') {
        window.Echo.private(`chat.group.${currentGroupId}`)
            .listen('.MessageSentEvent', (e) => {
                if(e.message.sender_id != myUserId) {
                    appendMessageToUI(e.message.message, 'received');
                }
            });
    }

    async function executeSendMessage() {
        const message = messageInput.value;
        if (!message.trim() || (!currentReceiverId && !currentGroupId)) return;

        messageInput.value = '';
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
                    receiver_id: currentReceiverId || null,
                    group_id: currentGroupId || null,
                    message: message
                })
            });
        } catch (error) {
            console.error("Error sending message:", error);
            alert("Failed to send message. Please check your connection.");
        }
    }

    if (sendButton && messageInput) {
        sendButton.addEventListener('click', function(e) {
            e.preventDefault();
            executeSendMessage();
        });

        messageInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault(); 
                executeSendMessage();
            }
        });
    }

    function appendMessageToUI(messageText, type) {
        const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        const placeholder = chatContainer.querySelector('.flex.justify-center.mt-10');
        if(placeholder) placeholder.remove();

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
            const avatarLetter = 'U'; 
            html = `
            <div class="flex items-end gap-3 max-w-[80%] mt-4">
                <div class="w-8 h-8 rounded-full flex-shrink-0 bg-slate-200 flex items-center justify-center font-bold text-xs text-slate-500">
                    ${avatarLetter}
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

    // ==========================================
    // NEW: CHAT FILTER LOGIC (All / Direct / Groups)
    // ==========================================
    const filterButtons = document.querySelectorAll('.filter-btn');
    const chatItems = document.querySelectorAll('.chat-item');
    const groupHeader = document.querySelector('.group-header');
    const dmHeader = document.querySelector('.dm-header');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // 1. Reset all buttons to inactive styling
            filterButtons.forEach(b => {
                b.classList.remove('bg-white', 'dark:bg-slate-700', 'shadow-sm', 'font-semibold', 'text-slate-900', 'dark:text-white');
                b.classList.add('font-medium', 'text-slate-500', 'dark:text-slate-400');
            });

            // 2. Add active styling to clicked button
            btn.classList.remove('font-medium', 'text-slate-500', 'dark:text-slate-400');
            btn.classList.add('bg-white', 'dark:bg-slate-700', 'shadow-sm', 'font-semibold', 'text-slate-900', 'dark:text-white');

            // 3. Get the filter type
            const filterType = btn.getAttribute('data-filter');

            // 4. Show/Hide sidebar items
            chatItems.forEach(item => {
                if (filterType === 'all') {
                    item.style.display = 'flex';
                } else if (filterType === 'groups') {
                    item.style.display = item.classList.contains('is-group') ? 'flex' : 'none';
                } else if (filterType === 'dms') {
                    item.style.display = item.classList.contains('is-dm') ? 'flex' : 'none';
                }
            });

            // 5. Show/Hide section headers
            if(groupHeader) groupHeader.style.display = (filterType === 'all' || filterType === 'groups') ? 'block' : 'none';
            if(dmHeader) dmHeader.style.display = (filterType === 'all' || filterType === 'dms') ? 'block' : 'none';
        });
    });

    // Chat Sidebar Search Logic
    const searchInput = document.getElementById('chat-search');
    const contactsContainer = document.getElementById('contacts-container'); 
    const originalContactsHTML = contactsContainer ? contactsContainer.innerHTML : ''; 

    if(searchInput && contactsContainer) {
        searchInput.addEventListener('input', async function(e) {
            const query = e.target.value;
            
            if (query.length < 1) {
                contactsContainer.innerHTML = originalContactsHTML;
                return;
            }

            const res = await fetch(`/api/users/search?q=${query}`);
            const users = await res.json();

            contactsContainer.innerHTML = '';
            if(users.length === 0) {
                contactsContainer.innerHTML = `<div class="p-4 text-center text-slate-500 text-sm">No users found.</div>`;
            } else {
                users.forEach(user => {
                    contactsContainer.innerHTML += `
                        <a href="/chat?user_id=${user.id}" class="chat-item is-dm flex items-center gap-4 px-4 py-4 hover:bg-slate-50 dark:hover:bg-slate-800 border-b border-slate-100 dark:border-slate-800/50">
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