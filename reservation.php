<?php include_once("layouts/header.php") ?>
<div class="container position-relative mt-4">
    <div class="cm-block cm-block-1">
        <div class="card w-100">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">электронный адрес почты</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Выберите столик</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Дополнение</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <input type="button" class="cm-button btn btn-dark" value="Бронировать">
                </form>

            </div>
        </div>
    </div>
    <div class="cm-block cm-block-2">
        <div class="card text-center w-100">
            <div class="card-body">
                <h5 class="card-title mt-5">Спасибо</h5>
                <p class="card-text mt-5">Мы ценим что вы используете наши сервисы</p>
            </div>
        </div>
    </div>
</div>
</div>

<?php include_once("layouts/footer.php") ?>
<script>
    $('.cm-button').on('click', function() {
        $('.cm-block-1').addClass('animated fadeOutUp');
    });
</script>