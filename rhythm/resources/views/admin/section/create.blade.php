@extends('layout.admin_layout')

@section('title', 'Создание элемента')

@section('content')

    <div class="container min-vh-100">
            <div class="pb-2 pt-2 mt-2">
                <a href="{{ route('admin.section.section_in_page', $page->id) }}" class="btn btn-light"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            </div>
        <form method="POST" action="{{ route('admin.section.section_in_page.store', $page->id) }} " enctype="multipart/form-data"
              class="w-50 mx-auto">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Создать элемент</h1>

            <div class="mt-2">
                <label class="mt-2 mb-2" for="section">Секция</label>
                <select class="form-select mt-2" aria-label="Default select example" name="section_id" id="section">
                    @foreach($sections as $section)
                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-2 item_create">
                <label class="mt-2 mb-2" for="item">Элемент
                    <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                         title="К примеру, вопрос">
                    </div>
                </label>
                <textarea class="form-control" id="item" name="item" rows="3">{{ old('item') }}</textarea>
            </div>
            @error('item')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="item_photo_create">
                <div class="mt-2 mb-2">
                    <label for="item" class="form-label">Выберите изображение</label>
                    <input class="form-control" type="file" id="image" name="item" accept="image/*"
                           onchange="updatePreview(this, 'image-preview')">
                </div>

                <div class="mt-3 text-center">
                    <img id="image-preview"
                         src="https://via.placeholder.com/200"
                         style="width:200px" alt="placeholder">
                </div>
            </div>

            <div class="mt-2">
                <label class="mt-2 mb-2" for="description">Описание
                    <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                         title="К примеру, ответ">
                    </div>
                </label>
                <textarea class="form-control" id="description" name="description"
                          rows="3">{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-light mt-4">Создать</button>
        </form>
    </div>

@endsection

@push('script')
    <script>
        let select = document.getElementById('section');
        let itemCreate = document.querySelector('.item_create');
        let itemPhotoCreate = document.querySelector('.item_photo_create');

        let lastIndex = select.value;

        // изначальный вид
        function disabledButton() {
            if ((lastIndex != 4) && (lastIndex != 6)) {
                itemCreate.hidden = false;
                itemPhotoCreate.hidden = true;
            } else {
                itemCreate.hidden = true;
                itemPhotoCreate.hidden = false;
            }
        }

        disabledButton()

        // после выбора
        select.addEventListener('change', function () {
            lastIndex = select.value;
            disabledButton()
        });
    </script>
@endpush
