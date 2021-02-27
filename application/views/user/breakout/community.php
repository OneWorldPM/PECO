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
</style>

<div id="bg" alt="" style="background-image: url(<?=base_url()?>front_assets/peco/pattern-ltblue.jpg);"></div>

<i class="fas fa-arrow-circle-left" aria-hidden="true" style="position: absolute;font-size: 45px;margin-top: 10px;margin-left: 15px;color: white;cursor: pointer;z-index: 100;" onclick="window.history.back();"></i>
<div class="row">

    <div class="col-md-6 text-center">
        <div style="background-color: #24488d;height: 84px;width: auto;text-align: center;color: white;font-weight: 600;font-size: 37px;padding-top: 39px;display: inline-block;padding-left: 10px;padding-right: 10px;">
            COMMUNITY
        </div>
    </div>

    <div class="col-md-6 text-center">
        <div>
            <img src="<?=base_url()?>front_assets/peco/IAMPECO_transparent.png" alt="PECO" style="height: unset;padding-bottom: unset;" width="200px">
        </div>
    </div>
</div>

<div class="row" style="margin-top: 125px;font-family: 'Roboto', sans-serif !important;">

    <div class="col-md-6 text-center m-t-10">
        <div class="col-md-12">
            <span style="font-size: 35px;font-weight: 500;color: white;">We have updated our Giving Pillars and</span>
        </div>
        <div class="col-md-12 m-t-10">
            <span style="font-size: 35px;font-weight: 500;color: white;">will be making charitable contributions</span>
        </div>
        <div class="col-md-12 m-t-10">
            <span style="font-size: 35px;font-weight: 500;color: white;">on behalf of each of you!</span>
        </div>
        <div class="col-md-12 m-t-30">
            <a href="https://www.surveymonkey.com/r/PECOCommunity" target="_blank"><button class="btn btn-info" style="font-weight: 500;font-size: 22px;background-color: #24488d;border-color: #24488d;">Click Here to select a <br> recipient organization</button></a>
        </div>
    </div>


    <div class="col-md-6 text-center m-t-10">

        <div class="col-md-12">
            <span style="font-size: 40px;font-weight: 500;color: white;">Our new Giving Pillars are:</span>
        </div>

        <div class="col-md-12 m-t-30">
            <span style="font-size: 25px;font-weight: 500;color: white;font-style: italic;"><i class="fas fa-circle" style="font-size: 15px;"></i> Building PECO's Future Workforce (Education)</span>
        </div>

        <div class="col-md-12 m-t-20">
            <span style="font-size: 25px;font-weight: 500;color: white;font-style: italic;"><i class="fas fa-circle" style="font-size: 15px;"></i> Energy Empowerment in the Communities (Environment)</span>
        </div>

        <div class="col-md-12 m-t-20">
            <span style="font-size: 25px;font-weight: 500;color: white;font-style: italic;"><i class="fas fa-circle" style="font-size: 15px;"></i> Enrichment Through Local Vitality</span>
        </div>
        <div class="col-md-12 m-t-5">
            <span style="font-size: 25px;font-weight: 500;color: white;font-style: italic;">(Neighborhood & Community Development)</span>
        </div>

        <div class="col-md-12 m-t-20">
            <span style="font-size: 25px;font-weight: 500;color: white;font-style: italic;"><i class="fas fa-circle" style="font-size: 15px;"></i> Equal Access to Arts and Culture</span>
        </div>

        <div class="col-md-12 m-t-20">
            <span style="font-size: 25px;font-weight: 500;color: white;font-style: italic;"><i class="fas fa-circle" style="font-size: 15px;"></i> Employee Engagement</span>
        </div>

        <div class="col-md-12 m-t-30 text-center">
            <a href="https://f.hubspotusercontent20.net/hubfs/4149976/Giving%20Pillars.pdf" target="_blank"><button class="btn btn-info" style="font-weight: 500;font-size: 22px;background-color: #24488d;border-color: #24488d;">Click Here</button></a>
        </div>

        <div class="col-md-12 m-t-10 text-center">
            <span style="font-size: 25px;font-weight: 500;color: #24488d;">to learn more about how we're focusing our</span>
        </div>
        <div class="col-md-12 m-t-10 text-center">
            <span style="font-size: 25px;font-weight: 500;color: #24488d;">efforts to give back to the communities we serve.</span>
        </div>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://kit.fontawesome.com/fd91b3535c.js" crossorigin="anonymous"></script>

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
                    window.open("https://google.com", "_blank");
                }
            })
        });
    });
</script>

