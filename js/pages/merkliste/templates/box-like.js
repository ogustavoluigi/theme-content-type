let templateBoxLike = `
<div class="col-12" style="padding-bottom: 1rem;">
    <div class="card" style="background-color: #f8f8f8;">
        <div class="card-body">
            <div class="row">
                <div class="col-3 col-lg-1">
                    <a href="$authorUrl" onclick="gtag('event', 'See Employer', {'event_category' : 'Home', 'event_label' : '$authorName'});">
                        <img src="$authorImage" class="border rounded img-fluid shadow-sm" alt="$authorName">
                    </a>
                </div>
                <div class="col-9 col-lg-2">
                    <br>
                    <a href="$authorUrl" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : 'Home', 'event_label' : '$authorName'});">
                        <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                        </svg>
                        $authorName
                    </a>
                </div>
                <div class="col-12 col-lg-5">
                    <h5 class="card-title" style="margin-top: 20px;">
                        <a href="$newUrl" onclick="gtag('event', 'See Job', {'event_category' : 'Home', 'event_label' : 'Jobbeschreibung';">
                            $newTitle
                        </a>
                    </h5>
                </div>
                <div class="col-5 col-lg-2">
                    <br>
                    <h6 class="card-subtitle mb-2 text-muted" title="$dateInGermanFormat">$dateDiffForHumans</h6>
                </div>
                <div class="col-7 col-lg-2 text-end ">
                    <br>
                    <a class="btn btn-ci" href="$newUrl" onclick="gtag('event', 'See Job', {'event_category' : 'Home', 'event_label' : 'Xsdfad;">
                        Job ansehen
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
`;