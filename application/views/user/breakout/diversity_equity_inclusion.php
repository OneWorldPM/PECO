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

<div id="bg" alt="" style="background-image: url(<?=base_url()?>front_assets/peco/pattern-gray.jpg);"></div>

<i class="fas fa-arrow-circle-left" aria-hidden="true" style="position: absolute;font-size: 45px;margin-top: 10px;margin-left: 15px;color: white;cursor: pointer;z-index: 100;" onclick="window.history.back();"></i>
<div class="row">

    <div class="col-md-6 text-center">
        <div style="background-color: #4297c7;height: auto;width: auto;text-align: center;color: white;font-weight: 600;font-size: 37px;padding-top: 39px;padding-right: 50px;padding-left: 50px;display: inline-block;padding-bottom: 25px;">
            DIVERSITY, EQUITY <br><br>& INCLUSION
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
        <span style="font-size: 50px;font-weight: 500;color: #4295c3;">Listen to conversations with</span>
    </div>
    <div class="col-md-12 m-t-10">
        <span style="font-size: 50px;font-weight: 500;color: #4295c3;">PECO leaders on their</span>
    </div>
    <div class="col-md-12 m-t-10">
        <span style="font-size: 50px;font-weight: 500;color: #4295c3;">personal DEI journeys.</span>
    </div>
</div>

<div class="row m-t-40">

    <div class="col-md-3">
        <div id="thumbnail1" class="video-thumbnail" style="cursor: pointer" video-url="https://vimeo.com/510883356">
            <img src="<?=base_url()?>front_assets/peco/video-thumbnails/play_button.png" style="position: absolute;margin-top: 15%;margin-left: 35%;width: 100px;">
            <img src="<?=base_url()?>front_assets/peco/video-thumbnails/thumbnail3-min.png" width="100%">
        </div>
        <div style="text-align: center;color: #4295c3;font-size: 20px;">
            A DEI Conversation with Ron Bradley
        </div>
    </div>

    <div class="col-md-3">
        <div id="thumbnail1" class="video-thumbnail" style="cursor: pointer" video-url="https://vimeo.com/510885693">
            <img src="<?=base_url()?>front_assets/peco/video-thumbnails/play_button.png" style="position: absolute;margin-top: 15%;margin-left: 35%;width: 100px;">
            <img src="<?=base_url()?>front_assets/peco/video-thumbnails/thumbnail2-min.png" width="100%">
        </div>
        <div style="text-align: center;color: #4295c3;font-size: 20px;">
            A DEI Conversation with Nicole LeVine
        </div>
    </div>

    <div class="col-md-3">
        <div id="thumbnail1" class="video-thumbnail" style="cursor: pointer" video-url="https://vimeo.com/510895774">
            <img src="<?=base_url()?>front_assets/peco/video-thumbnails/play_button.png" style="position: absolute;margin-top: 15%;margin-left: 35%;width: 100px;">
            <img src="<?=base_url()?>front_assets/peco/video-thumbnails/thumbnail1-min.png" width="100%">
        </div>
        <div style="text-align: center;color: #4295c3;font-size: 20px;">
            A DEI Conversation with Brian Crowe
        </div>
    </div>

    <div class="col-md-3">
        <div id="thumbnail1" class="video-thumbnail" style="cursor: pointer" video-url="https://vimeo.com/510881806">
            <img src="<?=base_url()?>front_assets/peco/video-thumbnails/play_button.png" style="position: absolute;margin-top: 15%;margin-left: 35%;width: 100px;">
            <img src="<?=base_url()?>front_assets/peco/video-thumbnails/thumbnail4-min.png" width="100%">
        </div>
        <div style="text-align: center;color: #4295c3;font-size: 20px;">
            A DEI Conversation with Funmi Williamson
        </div>
    </div>

</div>

<style>
    .modal-dialog {
        width: 100%;
        height: 98%;
        margin: 0;
        padding: 0;
    }

    .modal-content {
        height: 98%;
        min-height: 98%;
        border-radius: 0;
    }
    .modal-body{
        height: 100%;
    }

    iframe{
        width: 100% !important;
        height: 100% !important;
    }
</style>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #ffffff8f;">
            <div class="modal-header" style="padding: unset;">
                <button type="button" class="btn btn-sm btn-danger pull-right" data-dismiss="modal"><i class="far fa-times-circle"></i> CLOSE</button>
            </div>
            <div id="videoPlayer" class="modal-body">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://player.vimeo.com/api/player.js"></script>
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


        $('.video-thumbnail').on('click', function () {

            var videoUrl = $(this).attr('video-url');

            var options = {
                url: videoUrl,
                autoplay: true
            };

            var videoPlayer = new Vimeo.Player('videoPlayer', options);

            videoPlayer.setVolume(1);


            videoPlayer.play().then(function() {
                // The video is playing
            }).catch(function(error) {
                switch (error.name) {
                    case 'PasswordError':
                        // The video is password-protected
                        break;

                    case 'PrivacyError':
                        // The video is private
                        break;

                    default:
                        // Some other error occurred
                        break;
                }
            });

            videoPlayer.on('play', function() {
                console.log('Played the first video');
            });


            $('#videoModal').on('hidden.bs.modal', function () {
                videoPlayer.pause().then(function() {
                    // The video is paused
                }).catch(function(error) {
                    switch (error.name) {
                        case 'PasswordError':
                            // The video is password-protected
                            break;

                        case 'PrivacyError':
                            // The video is private
                            break;

                        default:
                            // Some other error occurred
                            break;
                    }
                });

                videoPlayer.unload().then(function() {
                    // The video has been unloaded
                });

                videoPlayer.destroy().then(function() {
                    // The player is destroyed
                });
            });


            $('#videoModal').modal('show');


            });


        });
</script>

