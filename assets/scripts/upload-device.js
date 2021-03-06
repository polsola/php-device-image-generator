// Disabling autoDiscover, otherwise Dropzone will try to attach twice.
Dropzone.autoDiscover = false;

$(function () {

    // Create the dropzone and setup
    var myDropzone = new Dropzone("#screen-uploader");

    myDropzone.on("success", function (file, response) {

        console.log(file);

        // Attach image to results
        $('.generated').append(
            `<div class="generated__item">
                <div class="generated__item__actions">
                    <a target="_blank" href="${response}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                            <path fill="#ffffff" fill-rule="evenodd" d="M20.7540411,19.4702623 L23.2110776,21.9272989 C23.6016019,22.3178231 23.6016019,22.9509881 23.2110776,23.3415124 C22.8205533,23.7320367 22.1873884,23.7320367 21.7968641,23.3415124 L19.2720831,20.8167315 C17.7904024,21.8894076 15.9690457,22.5217391 14,22.5217391 C9.02943725,22.5217391 5,18.4923019 5,13.5217391 C5,8.55117638 9.02943725,4.52173913 14,4.52173913 C18.9705627,4.52173913 23,8.55117638 23,13.5217391 C23,15.8020472 22.1519522,17.8842831 20.7540411,19.4702623 Z M14,20.5217391 C17.8659932,20.5217391 21,17.3877324 21,13.5217391 C21,9.65574588 17.8659932,6.52173913 14,6.52173913 C10.1340068,6.52173913 7,9.65574588 7,13.5217391 C7,17.3877324 10.1340068,20.5217391 14,20.5217391 Z"/>
                        </svg>
                    </a>
                    <a target="_blank" href="${response}" download="${file.name}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                            <path fill="#ffffff" fill-rule="evenodd" d="M15.0810184,21.0792295 L19.945503,16.2147449 C20.3791874,15.7810605 21.0823288,15.7810605 21.5160132,16.2147449 C21.9496976,16.6484293 21.9496976,17.3515707 21.5160132,17.7852551 L14.7852551,24.5160132 C14.3515707,24.9496976 13.6484293,24.9496976 13.2147449,24.5160132 C13.1317503,24.4330185 13.0646384,24.3401556 13.0134093,24.2412014 C12.9144551,24.1899723 12.8215922,24.1228604 12.7385975,24.0398658 L6.48398683,17.7852551 C6.05030241,17.3515707 6.05030241,16.6484293 6.48398683,16.2147449 C6.91767125,15.7810605 7.62081262,15.7810605 8.05449704,16.2147449 L12.6928,20.8530478 L12.6928,4.0353857 C12.6928,3.37589739 13.2274209,2.84127649 13.8869092,2.84127649 C14.5463975,2.84127649 15.0810184,3.37589739 15.0810184,4.0353857 L15.0810184,21.0792295 Z"/>
                        </svg>              
                    </a>
                </div>
                <img src="${response}"></div>
            `);
        $('.generated_count').html($('.generated img').length);

        // Show download button
        console.log('Showing button');
        $('#download').fadeIn(400);
        console.log('Done');
    });

    myDropzone.on('error', function (file, response) {
        console.log(response);
    });

    myDropzone.on("sending", function (file, xhr, data) {
        var device = $('#device-pick').val();
        var orientation = $('input[name="orientation"]:checked').val();
        data.append("device", device);
        data.append("orientation", orientation);
    });

    // Trigger click on first item on load
    $('.app__nav__section:first-child .devices .devices__item:first-child .devices__item__link').trigger('click');
});