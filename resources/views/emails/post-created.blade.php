<x-mail::message>
# Correo por aprobar
<x-mail::panel>
Se ha enviado un post por aprobar.
</x-mail::panel>
<x-mail::button :url="route('posts.show',$post)" color="success">
Click para aprobar
</x-mail::button>
</x-mail::message>