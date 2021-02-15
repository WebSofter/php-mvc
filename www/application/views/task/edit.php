<form id="task-form" method="post" action="/task/edit?id=<?php echo $_GET['id']; ?>">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
    <div class="mb-3">
        <label for="title" class="form-label">Название</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>" aria-describedby="titleHelp">
        <div id="titleHelp" class="form-text">Название задачи</div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Электронная почта</div>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Описание</label>
        <textarea class="form-control" id="description" name="description" aria-describedby="descriptionHelp"><?php echo $description; ?></textarea>
        <div id="descriptionHelp" class="form-text">Описание задачи</div>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Дата и время окончания</label>
        <input type="datetime-local" class="form-control" id="date" name="date" value="<?php echo $date; ?>" aria-describedby="dateHelp">
        <div id="dateHelp" class="form-text">Окончание задачи</div>
    </div>
    
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="status" <?php echo $status==1 ? 'checked' : '' ?> value="<?php echo $status; ?>" id="statusHelp">
            <label class="form-check-label" for="statusHelp">
                Статус задачи
            </label>
        </div>
    </div>

    <input type="submit" onclick="form_submit()"  class="btn btn-primary" value="Сохранить"/>
</form>
<script type="text/javascript">
  function form_submit() {
    //document.getElementById("task-form").submit();

    setTimeout(() => {
        //alert("Задача обновлена!")
      }, 500);
   }    
  </script>