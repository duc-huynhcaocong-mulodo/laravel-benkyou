@if(count($errors))
<div class="form-group">
  <div class="alert alert-danger">
      <ul>
        <?php foreach ($errors->all() as $error): ?>
          <li>
            {{ $error }}
          </li>
        <?php endforeach; ?>
      </ul>
  </div>
</div>
@endif
