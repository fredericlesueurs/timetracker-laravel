@props(['fieldName', 'value' => '', 'type' => 'text'])

<input id="{{ $fieldName }}" type="{{ $type }}" name="{{ $fieldName }}" class="input input-md input-bordered w-full @error($fieldName) input-error @enderror"
       value="{{ $value }}" />
@error($fieldName)<span class="text-error">{{ $message }}</span>@enderror
