<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<style>
    #bg {
        position: fixed;
        top: 0;
        left: 0;

        /* Preserve aspet ratio */
        min-width: 100%;
        min-height: 100%;
    }
    .swal2-popup{
        width: 400px;
    }
    .swal2-content{
        font-size: 20px;
    }
    .swal2-confirm{
        font-size: 15px !important;
    }
    .swal2-cancel{
        font-size: 15px !important;
    }
</style>

<div id="bg" alt="" style="background-image: url(<?=base_url()?>front_assets/peco/pattern-ltblue.jpg);"></div>

<i class="fas fa-arrow-circle-left" aria-hidden="true" style="position: absolute;font-size: 45px;margin-top: 10px;margin-left: 15px;color: white;cursor: pointer;z-index: 100;" onclick="window.history.back();"></i>
<div class="row">

    <div class="col-md-6 text-center">
        <div style="background-color: #24488d;height: 84px;width: auto;text-align: center;color: white;font-weight: 600;font-size: 37px;padding-top: 39px;display: inline-block;padding-left: 50px;padding-right: 50px;">
            SAFETY
        </div>
    </div>

    <div class="col-md-6 text-center">
        <div>
            <img src="<?=base_url()?>front_assets/peco/IAMPECO_transparent.png" alt="PECO" style="height: unset;padding-bottom: unset;" width="200px">
        </div>
    </div>
</div>

<div class="row text-center" style="font-family: 'Roboto', sans-serif !important;">
    <div class="col-md-12">
        <button class="btn btn-info action-btn" style="margin-top: 10%;font-weight: 600;font-size: 35px;background-color: #24488d;border-color: #24488d;">Click Here</button>
    </div>
</div>

<div class="row text-center" style="margin-top: 25px;font-family: 'Roboto', sans-serif !important;">
    <div class="col-md-12">
        <span style="font-size: 50px;font-weight: 500;color: white;">to Test Your</span>
    </div>
    <div class="col-md-12 m-t-10" style="height: 50px;">
        <span style="font-size: 50px;font-weight: 500;color: white;">Safety Knowledge</span>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $(document).ready(function () {

        $('.action-btn').on('click', function () {
            Swal.fire({
                title: '',
                text: 'Click here to recommit to safety as a priority in 2021',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'I commit'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.open("https://kahoot.it/challenge/009063769", "_blank");
                }
            })
        });
    });
</script>

