<?php
$success = $this->session->flashdata('success');
$error = $this->session->flashdata('error');
$warning  = $this->session->flashdata('warning');

if ($success){
    $alert_status='alert-success';
    $status = 'Success';
    $massage=$success;

}
if ($error){
    $alert_status='alert-error';
    $status = 'Success';
    $massage=$error;

}
if ($warning){
    $alert_status='alert-warning';
    $status = 'Success';
    $massage=$warning;

}
?>
<?php if ($success || $error || $warning): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert <?= $alert_status ?> alert-dismissible fade show" role="alert">
                <strong><?= $status ?></strong><?= $massage ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </div>
        </div>
    </div>
<?php endif ?>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>
                Sukses
            </strong>Sukses alert.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    &times;
                </span>
            </button>
        </div>
    </div>
</div>