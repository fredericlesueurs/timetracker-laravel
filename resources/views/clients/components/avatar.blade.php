@if($client->logo !== null)
    <div class="avatar">
        <div {{ $attributes->merge(['class' => 'mask mask-squircle']) }}>
            <img src="{{ asset('images/profile.png') }}" alt={{ 'Logo de l\'entreprise '.$client->name }}/>
        </div>
    </div>
@else
    <div class="avatar placeholder">
        <div  {{ $attributes->merge(['class' => 'mask mask-squircle bg-primary uppercase']) }}>
            <span class="text-white">{{ $clientInitials }}</span>
        </div>
    </div>
@endif
