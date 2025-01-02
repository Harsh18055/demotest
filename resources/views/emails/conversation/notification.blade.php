<x-mail::message>
# Dear {{ $customer->name }},

A new conversation has been added to your profile:

- **Time**: {{ $conversation['time'] }}
- **Communication Medium**: {{ $conversation['communication_medium'] }}
- **Message**: {{ $conversation['message'] }}

If you have any questions, feel free to contact us.

Thank you,  
**Harsh Sakariya**
</x-mail::message>
