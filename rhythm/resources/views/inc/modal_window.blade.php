<!-- Модальное окно -->
<div class="modal fade" id="modal_window_main" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal_window_main ">
            <div class="modal-header modal_window d-flex justify-content-center">
                <p class="modal-title h5" id="exampleModalLabel">Войдите в личный кабинет!</p>
            </div>
            <div class="modal-body modal_window d-flex align-items-center justify-content-between" style="height: 100px;">
                    <div class="modal_window_button">
                        <a class="nav-link mx-2 btn btn-light btn_record rounded-pill" href="{{ route('auth') }}">Авторизация</a>
                    </div>
                    <div class="modal_window_button">
                        <a class="nav-link mx-2 btn btn-light btn_record rounded-pill" href="{{ route('reg') }}">Регистрация</a>
                    </div>
                </div>
            <div class="modal-footer modal_window">
                <button type="button" class="modal_window_close" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
