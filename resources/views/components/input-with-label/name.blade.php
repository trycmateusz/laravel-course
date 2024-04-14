@include('components.input-with-label.base', [
    'errorName' => 'name',
    'label' => __('Name'),
    'name' => 'name',
    'type' => 'text',
    'value' => $value ?? old('name'),
])
