@if($logo !== null && $clientName !== null)
    <div class="avatar">
        <div {{ $attributes->merge(['class' => 'mask mask-squircle']) }}>
            <img src="{{ asset('images/profile.png') }}" alt={{ 'Logo de l\'entreprise '.$clientName }}/>
        </div>
    </div>
@else
    <div class="avatar placeholder">
        <div  {{ $attributes->merge(['class' => 'mask mask-squircle bg-primary uppercase']) }}>
            <span class="text-white">{{ $clientInitials ?? 'NEW' }}</span>
        </div>
    </div>
@endif
