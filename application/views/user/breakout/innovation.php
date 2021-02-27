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

    .townhallplanning-link{
        color: #cfe8ff;
    }
    .townhallplanning-link:hover{
        color: #0792ff;
    }
    .townhallplanning-link:focus{
        color: #cfe8ff;
    }
</style>

<div id="bg" alt="" style="background-image: url(<?=base_url()?>front_assets/peco/pattern-dkblue.jpg);"></div>

<i class="fas fa-arrow-circle-left" aria-hidden="true" style="position: absolute;font-size: 45px;margin-top: 10px;margin-left: 15px;color: white;cursor: pointer;z-index: 100;" onclick="window.history.back();"></i>
<div class="row">

    <div class="col-md-6 text-center">
        <div style="background-color: #4297c7;height: 84px;width: auto;text-align: center;color: white;font-weight: 600;font-size: 37px;padding-top: 39px;padding-right: 50px;padding-left: 50px;display: inline-block;">
            INNOVATION
        </div>
    </div>

    <div class="col-md-6 text-center">
        <div>
            <img src="<?=base_url()?>front_assets/peco/IAMPECO_transparent.png" alt="PECO" style="height: unset;padding-bottom: unset;" width="200px">
        </div>
    </div>
</div>

<div class="row text-center" style="margin-top: 125px;font-family: 'Roboto', sans-serif !important;">
    <div class="col-md-12">
        <span style="font-size: 50px;font-weight: 500;color: white;">At PECO, we're constantly innovating</span>
    </div>
    <div class="col-md-12 m-t-10">
        <span style="font-size: 50px;font-weight: 500;color: white;">to better serve our customers.</span>
    </div>
</div>

<div class="row text-center" style="margin-top: 10px;font-family: 'Roboto', sans-serif !important;">
    <div class="col-md-12">
        <a href="https://f.hubspotusercontent20.net/hubfs/4149976/townhall-graphics-1%5B1%5D.pdf" target="_blank"><button class="btn btn-info" style="font-weight: 600;font-size: 35px;background-color: #4297c7;border-color: #4297c7;">Click Here</button></a>
    </div>
</div>

<div class="row text-center" style="margin-top: 25px;font-family: 'Roboto', sans-serif !important;">
    <div class="col-md-12">
        <span style="font-size: 50px;font-weight: 500;color: white;">for instructions on how to participate</span>
    </div>
    <div class="col-md-12 m-t-10">
        <span style="font-size: 50px;font-weight: 500;color: white;">in our innovation scavenger hunts.</span>
    </div>
</div>

<div class="row text-center" style="margin-top: 60px;font-family: 'Roboto', sans-serif !important;">
    <div class="col-md-12">
        <span style="font-size: 30px;font-weight: 500;color: white;">Click link in instructions to submit photos and explanations of your ideas</span>
    </div>
    <div class="col-md-12 m-t-10">
        <span style="font-size: 30px;font-weight: 500;color: white;">to the <u><a class="townhallplanning-link" href="mailto:PECOEmployeeEngagementCouncil@exeloncorp.com" target="_blank">Town Hall Planning Team</a></u> by <strong style="font-size: 33px;">March 5</strong> for a chance to win Achievers points.</span>
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
                    window.open("https://f.hubspotusercontent20.net/hubfs/4149976/Innovation%20Scavenger%20Hunt.pdf", "_blank");
                }
            })
        });
    });
</script>

