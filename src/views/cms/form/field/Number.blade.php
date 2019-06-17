<div>
    <input class="form-control control-half autonumeric" value="{{ $model->getValue($key, $listItem, $language) }}" type="text" {{ $model->isRequired($key) }} {{ $model->isDisabled($key) }} label="{{ $model->label($key) }}"/>
    <input class="autonumericvalue" id="{{ $model->getFormName($key, $listName, $listIndex, $language) }}" name="{{ $model->getFormName($key, $listName, $listIndex, $language) }}" value="{{ $model->getValue($key, $listItem, $language) }}" type="hidden" {{ $model->isDisabled($key) }}/>
</div>
