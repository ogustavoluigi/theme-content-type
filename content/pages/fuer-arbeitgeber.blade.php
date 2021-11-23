@extends('template.'.config('settings.template').'.content.master')
@section('head')
@section('meta_title', 'Inserieren Sie Ihre Stellen auf dem Jobportal für die Oberpfalz')
@section('meta_description', 'Hier findest du die Besten Stellenangebote aus deiner Branche: Handel und Gewerbe, Bau, Verwaltung & andere...')
@stop

@section('content')
    <div class="row">
        <div id="header_static" style="background-color: #9699AA; background-image: url('https://ik.imagekit.io/areya/julian-hochgesang-Ju9J4ngPyKU-unsplash__fqrac0Up.jpg?updatedAt=1633551598716'); background-position: center; background-size: cover;">
            <div id="city_headline" class="p-5" style="background-color: rgba(255, 255, 255, 0.55);">
                <br>
                <h1><strong>Jobs Oberpfalz</strong> - Das Jobportal für die Oberpfalz</h1>
                <br>
                <p class="fs-4">Pro Monat suchen hier 20.000 Jobsuchende aktiv nach Ihrem Traubjob.</p>
                <br>
                <p class="fs-5">Inserieren auch Sie Ihre Stellenanzeigen bei uns und wir helfen Ihnen Ihre offenen
                    Arbeitsstellen bestmöglich und kompetent zu besetzen. Jetzt kostenlos starten und testen!
                </p>
                <br>
            </div>
            <div class="text-center">
                <br>
                <br>
                <a id="btn-register2" class="btn btn-sm btn-success btn-lg position-relative fs-5 shadow-lg"  href="{{url('dashboard/register')}}">Jetzt Arbeitgeberkonto erstellen</a>
            </div>
            <br>
            <br>
            <br>
            <i class="text-end text-white" style="float: right;">Anzahl Besucher jobs-oberpfalz.de im September 2021, gemessen mit Google Analytics</i>
        </div> <!-- header_static -->
        <section>
            <div class="row">
                <div class="col-12">
                    <h2 id="funktionen" class="mb-5">Ihre Vorteile mit uns</h2>
                </div>
                <div class="col-6 col-md-4 mb-5 text-center">
                    <svg style="fill: #f49c35; height: 60px;" class="d-block mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M560 160c-2 0-4 .4-6 1.2L384 224l-10.3-3.6C397 185.5 416 149.2 416 123 416 55 358.7 0 288 0S160 55.1 160 123c0 11.8 4 25.8 10.4 40.6L20.1 216C8 220.8 0 232.6 0 245.7V496c0 9.2 7.5 16 16 16 2 0 4-.4 6-1.2L192 448l172 60.7c13 4.3 27 4.4 40 .2L555.9 456c12.2-4.9 20.1-16.6 20.1-29.7V176c0-9.2-7.5-16-16-16zM176 419.8L31.9 473l-1.3-226.9L176 195.6zM288 32c52.9 0 96 40.8 96 91 0 27-38.1 88.9-96 156.8-57.9-67.9-96-129.8-96-156.8 0-50.2 43.1-91 96-91zm80 444.2l-160-56.5V228.8c24.4 35.3 52.1 68 67.7 85.7 3.2 3.7 7.8 5.5 12.3 5.5s9-1.8 12.3-5.5c12.8-14.5 33.7-39.1 54.3-66.9l13.4 4.7zm32 .2V252.2L544.1 199l1.3 226.9zM312 128c0-13.3-10.8-24-24-24s-24 10.7-24 24c0 13.2 10.8 24 24 24s24-10.7 24-24z"/></svg>
                    <h3 class="fs-5 mt-2">Aus der Region - für die Region</h3>
                    <p>Wir sind ein Oberpfälzer Unternehmen und Helfen anderen Firmen hier aus unserer Region Menschen anzusprechen, die auf der Suche nach Arbeit sind.</p>
                    <i>Lokal ist unsere Stärke!</i>
                </div>
                <div class="col-6 col-md-4 mb-5 text-center">
                    <svg style="fill: #f49c35; height: 60px;" class="d-block mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path d="M203.09 183.42l-45-13.5c-5.16-1.55-8.77-6.78-8.77-12.73 0-7.27 5.3-13.19 11.8-13.19h28.11c4.56 0 8.96 1.29 12.82 3.72 3.24 2.03 7.36 1.91 10.13-.73l11.75-11.21c3.53-3.37 3.33-9.21-.57-12.14-9.1-6.83-20.08-10.77-31.37-11.35V96c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v16.12c-23.62.63-42.67 20.55-42.67 45.07 0 19.97 12.98 37.81 31.58 43.39l45 13.5c5.16 1.55 8.77 6.78 8.77 12.73 0 7.27-5.3 13.19-11.8 13.19h-28.11c-4.56 0-8.96-1.29-12.82-3.72-3.24-2.03-7.36-1.91-10.13.73l-11.75 11.21c-3.53 3.37-3.33 9.21.57 12.14 9.1 6.83 20.08 10.77 31.37 11.35V288c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8v-16.12c23.62-.63 42.67-20.54 42.67-45.07 0-19.97-12.98-37.81-31.58-43.39zM176 0C73.05 0-.12 83.54 0 176.24c.06 44.28 16.5 84.67 43.56 115.54C69.21 321.03 93.85 368.68 96 384l.06 75.18c0 3.15.94 6.22 2.68 8.84l24.51 36.84c2.97 4.46 7.97 7.14 13.32 7.14h78.85c5.36 0 10.36-2.68 13.32-7.14l24.51-36.84c1.74-2.62 2.67-5.7 2.68-8.84L256 384c2.26-15.72 26.99-63.19 52.44-92.22C335.55 260.85 352 220.37 352 176 352 78.8 273.2 0 176 0zm47.94 454.31L206.85 480h-61.71l-17.09-25.69-.01-6.31h95.9v6.31zm.04-38.31h-95.97l-.07-32h96.08l-.04 32zm60.4-145.32c-13.99 15.96-36.33 48.1-50.58 81.31H118.21c-14.26-33.22-36.59-65.35-50.58-81.31C44.5 244.3 32.13 210.85 32.05 176 31.87 99.01 92.43 32 176 32c79.4 0 144 64.6 144 144 0 34.85-12.65 68.48-35.62 94.68z"/></svg>                <h3 class="fs-5">Kostenefizient</h3>
                    <p>Das Basis Paket ist und bleibt für immer kostenlos. Unsere Premium Pakete zeichnen sich durch eine faire und transparente Preisgestalltung aus.</p>
                    <i>Vergleichen Sie uns mit der Konkurenz!</i>
                </div>
                <div class="col-6 col-md-4 mb-5 text-center">
                    <svg style="fill: #f49c35; height: 60px;" class="d-block mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M512 32H64C28.7 32 0 60.7 0 96v320c0 35.3 28.7 64 64 64h448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64zm32 384c0 17.6-14.4 32-32 32H64c-17.6 0-32-14.4-32-32V96c0-17.6 14.4-32 32-32h448c17.6 0 32 14.4 32 32v320zm-72-128H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zm0-64H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zm0-64H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zM208 288c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80zm0-128c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48 48-48zm46.8 144c-19.5 0-24.4 7-46.8 7s-27.3-7-46.8-7c-21.2 0-41.8 9.4-53.8 27.4C100.2 342.1 96 355 96 368.9V392c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-23.1c0-7 2.1-13.8 6-19.6 5.6-8.3 15.8-13.2 27.3-13.2 12.4 0 20.8 7 46.8 7 25.9 0 34.3-7 46.8-7 11.5 0 21.7 5 27.3 13.2 3.9 5.8 6 12.6 6 19.6V392c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-23.1c0-13.9-4.2-26.8-11.4-37.5-12.3-18-32.9-27.4-54-27.4z"/></svg>
                    <h3 class="fs-5">Bewerbung ohne Registrierung </h3>
                    <p>
                        Bewerber können sich bei uns ohne Registrierung direkt bei Ihnen Bewerben. Zustellug direkt in Ihr Mailpostfach oder weiterleitung per Link.
                    </p>
                    <i>Kinderleichte Bewerbung!</i>
                </div>
                <div class="col-6 col-md-4 mb-5 mt-5 text-center">
                    <svg style="fill: #f49c35; height: 60px;" class="d-block mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M320 352h-4.7c-12.16 0-24 2.9-35.5 6.8a173.76 173.76 0 0 1-111.64 0c-11.48-3.9-23.29-6.78-35.42-6.78H128A128 128 0 0 0 0 480a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32 128 128 0 0 0-128-128zM32 480a96.1 96.1 0 0 1 96-96h4.74c6.92 0 14.92 1.62 25.16 5.09a205.75 205.75 0 0 0 132.16 0c10.31-3.49 18.33-5.11 25.24-5.11h4.7a96.1 96.1 0 0 1 96 96zm16-256a16 16 0 0 0 16-16v-16c0-88.22 71.78-160 160-160s160 71.78 160 160v16a80.09 80.09 0 0 1-80 80h-32a32 32 0 0 0-32-32h-32a32 32 0 0 0 0 64h96a112.14 112.14 0 0 0 112-112v-16C416 86.12 329.88 0 224 0S32 86.12 32 192v16a16 16 0 0 0 16 16zM224 96a95.57 95.57 0 0 1 71.23 159.76c0 .09.13.15.18.24H304a47.89 47.89 0 0 0 40.55-22.58C349 220.36 352 206.58 352 192a128 128 0 0 0-256 0c0 40.42 19.1 76 48.35 99.47-.06-1.17-.35-2.28-.35-3.47a63.25 63.25 0 0 1 8.93-32A95.58 95.58 0 0 1 224 96z"/></svg>
                    <h3 class="fs-5">Persönliche Ansprechpartner </h3>
                    <p>Feste Ansprechpartner, direkte Kommunikation und kompetente Beratung rund um das Thema Mitarbeitergewinnung in der Oberpfalz.
                        </p>
                    <i>Wir kümmern uns!</i>
                </div>
                <div class="col-6 col-md-4 mb-5 mt-5 text-center">
                    <svg style="fill: #f49c35; height: 60px;" class="d-block mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M560.83 135.96l-24.79-24.79c-20.23-20.24-53-20.26-73.26 0L384 189.72v-57.75c0-12.7-5.1-25-14.1-33.99L286.02 14.1c-9-9-21.2-14.1-33.89-14.1H47.99C21.5.1 0 21.6 0 48.09v415.92C0 490.5 21.5 512 47.99 512h288.02c26.49 0 47.99-21.5 47.99-47.99v-80.54c6.29-4.68 12.62-9.35 18.18-14.95l158.64-159.3c9.79-9.78 15.17-22.79 15.17-36.63s-5.38-26.84-15.16-36.63zM256.03 32.59c2.8.7 5.3 2.1 7.4 4.2l83.88 83.88c2.1 2.1 3.5 4.6 4.2 7.4h-95.48V32.59zm95.98 431.42c0 8.8-7.2 16-16 16H47.99c-8.8 0-16-7.2-16-16V48.09c0-8.8 7.2-16.09 16-16.09h176.04v104.07c0 13.3 10.7 23.93 24 23.93h103.98v61.53l-48.51 48.24c-30.14 29.96-47.42 71.51-47.47 114-3.93-.29-7.47-2.42-9.36-6.27-11.97-23.86-46.25-30.34-66-14.17l-13.88-41.62c-3.28-9.81-12.44-16.41-22.78-16.41s-19.5 6.59-22.78 16.41L103 376.36c-1.5 4.58-5.78 7.64-10.59 7.64H80c-8.84 0-16 7.16-16 16s7.16 16 16 16h12.41c18.62 0 35.09-11.88 40.97-29.53L144 354.58l16.81 50.48c4.54 13.51 23.14 14.83 29.5 2.08l7.66-15.33c4.01-8.07 15.8-8.59 20.22.34C225.44 406.61 239.9 415.7 256 416h32c22.05-.01 43.95-4.9 64.01-13.6v61.61zm27.48-118.05A129.012 129.012 0 0 1 288 384v-.03c0-34.35 13.7-67.29 38.06-91.51l120.55-119.87 52.8 52.8-119.92 120.57zM538.2 186.6l-21.19 21.19-52.8-52.8 21.2-21.19c7.73-7.73 20.27-7.74 28.01 0l24.79 24.79c7.72 7.73 7.72 20.27-.01 28.01z"/></svg>
                    <h3 class="fs-5">Monatlich kündbar</h3>
                    <p>
                        Warum lange binden? Unsere Premium Angebote lassen Ihnen die Freiheit, jederzeit zu Entscheiden ob wir Ihnen
                        einen Mehrwert bringen.
                    </p>
                    <i>Sie haben immer die Wahl!</i>
                </div>
                <div class="col-6 col-md-4 mb-5 mt-5 text-center">
                    <svg style="fill: #f49c35; height: 60px;" class="d-block mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M80 352H16c-8.84 0-16 7.16-16 16v128c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V368c0-8.84-7.16-16-16-16zM64 480H32v-96h32v96zm496-288h-64c-8.84 0-16 7.16-16 16v288c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V208c0-8.84-7.16-16-16-16zm-16 288h-32V224h32v256zM502.77 88.68C510.12 93.24 518.71 96 528 96c26.51 0 48-21.49 48-48S554.51 0 528 0s-48 21.49-48 48c0 5.51 1.12 10.71 2.83 15.64l-89.6 71.68c-7.35-4.57-15.94-7.33-25.23-7.33s-17.88 2.76-25.23 7.33l-89.6-71.68C254.88 58.72 256 53.51 256 48c0-26.51-21.49-48-48-48s-48 21.49-48 48c0 7.4 1.81 14.32 4.8 20.58L68.58 164.8C62.32 161.81 55.4 160 48 160c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-7.4-1.81-14.32-4.8-20.58l96.22-96.22C193.68 94.19 200.6 96 208 96c9.29 0 17.88-2.76 25.23-7.33l89.6 71.68c-1.71 4.93-2.83 10.14-2.83 15.65 0 26.51 21.49 48 48 48s48-21.49 48-48c0-5.51-1.12-10.72-2.83-15.65l89.6-71.67zM528 32c8.82 0 16 7.18 16 16s-7.18 16-16 16-16-7.18-16-16 7.18-16 16-16zM48 224c-8.82 0-16-7.18-16-16s7.18-16 16-16 16 7.18 16 16-7.18 16-16 16zM208 64c-8.82 0-16-7.18-16-16s7.18-16 16-16 16 7.18 16 16-7.18 16-16 16zm160 128c-8.82 0-16-7.18-16-16s7.18-16 16-16 16 7.18 16 16-7.18 16-16 16zm-128 0h-64c-8.84 0-16 7.16-16 16v288c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V208c0-8.84-7.16-16-16-16zm-16 288h-32V224h32v256zm176-160h-64c-8.84 0-16 7.16-16 16v160c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V336c0-8.84-7.16-16-16-16zm-16 160h-32V352h32v128z"/></svg>                <h3 class="fs-5">Performance Statistik</h3>
                    <p>Monatliche Auswertungen über Reichweite und Ergebnisse Ihrer Stellenanzeigen ermöglicht Ihnen eine datenbasierte Planung Ihres Werbebudget.
                    </p>
                    <i>Daten sind Wissen!</i>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-12">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2 id="funktionen" class="mb-5">Funktionen</h2>
                </div>
                <div class="col-6 col-md-4 mb-5 text-center">
                    <svg style="fill: #f49c35; height: 60px;" class="d-block mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                    <h3 class="fs-5">Google Jobs Integration</h3>
                    <p>Hier verföffentliche Stellenangebote erscheinen direkt in dern Suchergebnissen von Google als Jobangebot.</p>
                </div>
                <div class="col-6 col-md-4 mb-5 text-center">
                    <svg style="fill: #f49c35; height: 60px;" class="d-block mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                    <h3 class="fs-5">Facebook Jobs</h3>
                    <p>Wir sind auch an die Facebook Jobs Schnittstelle angebunden, welche Ihre Jobs automatisch auf der Platttform veröffentlicht.
                </div>
                <div class="col-6 col-md-4 mb-5 text-center">
                    <svg style="fill: #f49c35; height: 60px;" class="d-block mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M462.3 62.7c-54.5-46.4-136-38.7-186.6 13.5L256 96.6l-19.7-20.3C195.5 34.1 113.2 8.7 49.7 62.7c-62.8 53.6-66.1 149.8-9.9 207.8l193.5 199.8c6.2 6.4 14.4 9.7 22.6 9.7 8.2 0 16.4-3.2 22.6-9.7L472 270.5c56.4-58 53.1-154.2-9.7-207.8zm-13.1 185.6L256.4 448.1 62.8 248.3c-38.4-39.6-46.4-115.1 7.7-161.2 54.8-46.8 119.2-12.9 142.8 11.5l42.7 44.1 42.7-44.1c23.2-24 88.2-58 142.8-11.5 54 46 46.1 121.5 7.7 161.2z"/></svg>
                    <h3 class="fs-5">Favoritenliste für Bewerber</h3>
                    <p>Bewerber können sich interessante Stellenangebote auf einer Favoritenliste merken, um diese dann später wieder zu finden.
                </div>
                <div class="col-6 col-md-4 mb-5 text-center">
                    <svg style="fill: #f49c35; height: 60px;" class="d-block mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M508.485 184.485l-92.485 92c-4.687 4.686-12.284 4.686-16.97 0l-7.071-7.07c-4.687-4.686-4.687-12.284 0-16.971L452.893 192H12c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h440.905l-60.946-60.444c-4.687-4.686-4.687-12.284 0-16.971l7.07-7.07c4.687-4.686 12.284-4.686 16.971 0l92.485 92c4.687 4.686 4.686 12.284 0 16.97zm-504.97 160l92.485 92c4.687 4.686 12.284 4.686 16.971 0l7.07-7.07c4.687-4.686 4.687-12.284 0-16.971L59.095 352H500c6.627 0 12-5.373 12-12v-8c0-6.627-5.373-12-12-12H59.107l60.934-60.444c4.687-4.686 4.687-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.687-16.97 0l-92.485 92c-4.686 4.686-4.687 12.284 0 16.97z"/></svg>
                    <h3 class="fs-5">Schnittstelle zum Stellenabgleich</h3>
                    <p>Wir haben eine API-Schnittstelle, um Ihre Jobangebote von verschiedenen Plattformen auf unsere Homepage zu importieren.
                    </p>
                </div>
                <div class="col-6 col-md-4 mb-5 text-center">
                    <svg style="fill: #f49c35; height: 60px;" class="d-block mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 224h-16v-62.5C384 73.1 312.9.3 224.5 0 136-.3 64 71.6 64 160v64H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zM96 160c0-70.6 57.4-128 128-128s128 57.4 128 128v64H96v-64zm304 320H48c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h352c8.8 0 16 7.2 16 16v192c0 8.8-7.2 16-16 16z"/></svg>                <h3 class="fs-5">Datensicherheit per Design</h3>
                    <p>Wir speichern keine personenbezogenen Daten von Bewerbern und übermitteln nur Daten, welche Sie für Ihre interne Kandidatenaswahl benötigen.</a>
                    </p>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-12 mt-5 mb-2">
                <h2 id="preise">Ihre Möglichkeiten</h2>
            </div>
        </div>
        <style>
            .card {
                position:relative;
            }
            .card .card-badge {
                position:absolute;
                top:-15px;
                right:-15px;
                padding:5px;
                background: linear-gradient(270deg, #ae3636, #fd0c0c);
                background-size: 400% 400%;
                -webkit-animation: card-badge-animation 22s ease infinite;
                -moz-animation: card-badge-animation 22s ease infinite;
                animation: card-badge-animation 22s ease infinite;
                color:white;
                border-radius: 20px;
                font-size: 12px;
            }
            @-webkit-keyframes card-badge-animation {
                0%{background-position:0% 50%}
                50%{background-position:100% 50%}
                100%{background-position:0% 50%}
            }
            @-moz-keyframes card-badge-animation {
                0%{background-position:0% 50%}
                50%{background-position:100% 50%}
                100%{background-position:0% 50%}
            }
            @keyframes card-badge-animation {
                0%{background-position:0% 50%}
                50%{background-position:100% 50%}
                100%{background-position:0% 50%}
            }
            .price-feature{
                min-height: 80px;
                line-height: 55px;
            }
            .card-footer{
                background-color: white;
                border-top: none;
            }
        </style>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-12 col-lg-4 mb-5">
                <div class="card h-100 shadow-lg">
                    <div class="card-header text-center">
                        <h5 class="card-title text-center">Basis Arbeitgeberkonto</h5>
                        <span style="color: #f49c35; font-size: 30px;" class="text-center">kostenlos</span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Unbegrenzte Stellen <i class="fal fa-"></i>
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Arbeitgeber Profil
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Monatlicher Performance Bericht
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: red; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"/></svg>
                            Firma erscheint nicht als Top-Arbeitgeber</li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: red; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"/></svg>
                            Wird nicht aktiv beworben
                            <span title="Stellenanzeigen werden nicht auf zusätzlichen Portalen wie Facebook, LinkedIn und anderen beworben um die Reichweite der Anzeige zu erhöhen. Mit einem kostenpflichtigen Premium Arbeitgeber Konto können Sie diese Funktion nutzen.">
                                        <svg style="fill: gray; width: 14px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"/></svg>
                                    </span>
                        </li>
                    </ul>
                    <div class="card-body d-none d-sm-block"></div>
                    <div class="card-footer">
                        <a href="{{ url('/dashboard/register') }}" class="btn btn-ci btn-lg d-block">Jetzt Firma kostenlos eintragen <i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-5">
                <div class="card h-100 shadow-lg">
                    <div class="card-header text-center">
                        <h5 class="card-title text-center">Premium Arbeitgeberkonto</h5>
                        <span style="color: #f49c35; font-size: 30px;" class="text-center">129 € </span><span style="color: #f49c35;" class="text-center"> <span class="text-dark">/ Monat</span></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Unbegrenzte Premium Stellen
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Premium Arbeitgeber Profil
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Firma erscheint als Top-Arbeitgeber
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Monatlicher Performance Bericht
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Stellen werden auf anderen Plattformen beworben
                            <span title="Stellenanzeigen werden auf zusätzlichen Portalen wie Facebook, LinkedIn und anderen Websiten beworben, um die Reichweite der Anzeige zu erhöhen.">
                                            <svg style="fill: gray; width: 14px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"/></svg>
                                        </span>
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Monatlich kündbar
                        </li>
                    </ul>
                    <div class="card-body d-none d-sm-block"></div>
                    <div class="card-footer">
                        <a href="{{ url('/dashboard/register') }}" class="btn btn-ci btn-lg d-block">Premium Konto erstellen <i class="fal fa-arrow-right"></i></a>
                    </div>
                    <div class="card-badge text-center">14 Tage <br>kostenlos<br> testen!</div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-5">
                <div class="card h-100 shadow-lg">
                    <div class="card-header text-center">
                        <h5 class="card-title text-center">Full Service Lösung</h5>
                        <span style="color: #f49c35; font-size: 30px;" class="text-center">ab 249 € </span><span style="color: #f49c35;" class="text-center"> <span class="text-dark">/ Monat</span></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Unbegrenzte Premium Stellen
                        </li>
                        <li class="list-group-item price-feature" style="height: 80px; line-height: 55px;">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Premium Arbeitgeber Profil
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Firma erscheint als Top-Arbeitgeber
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Monatlicher Performance Bericht
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Stellen werden auf anderen Plattformen beworben  <span title="Stellenanzeigen werden auf zusätzlichen Portalen wie Facebook, LinkedIn und anderen Websiten beworben, um die Reichweite der Anzeige zu erhöhen.">
                                            <svg style="fill: gray; width: 14px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"/></svg>
                                        </span>
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Stellenservice (Eintragen, aktualisieren, Bilder, ...)
                            <span title="Wir übernehmen das Einstellen und das etwaige Aktualisieren Ihrer Stellenanzeigen.">
                                        <svg style="fill: gray; width: 14px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"/></svg>
                                    </span>
                        </li>
                        <li class="list-group-item price-feature">
                            <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
                            Monatlich kündbar
                        </li>
                    </ul>
                    <div class="card-footer">
                        <a href="{{ url('/dashboard/register') }}" class="btn btn-ci btn-lg d-block">Heute noch Angebot erhalten<i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="row ">
            <div class="col-12">
                <i class="text-end " style="float: right;">Alle Preise richten sich ausschließlich an Gewerbekunden und verstehen sich zzgl. gesetzlicher Mehrwertsteuer.</i>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <section class="mt-5 ">
            <div class="row carousel-row">
                <div class="container">
                    <div class="col-sm-12">
                        <h2 class="mb-5">Unsere Kunden mit <strong>Premium</strong> Stellenpaketen</h2>
                    </div>
                    <div class="row top_arbeitgeber logo-carousel slider" data-arrows="true">
                        <div class="col-3 col-lg">
                            <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                                <img src="https://www.jobs-oberpfalz.de/uploads/profile/1395.jpg?s=120&d=identicon&r=PG" loading="lazy" class="img-fluid center-block border rounded mb-2 grayscale">
                                <br>
                                Seltmann
                            </div>
                        </div>
                        <div class="col-3 col-lg">
                            <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                                <img src="https://www.jobs-oberpfalz.de/uploads/profile/70.jpg?s=120&d=identicon&r=PG" loading="lazy" class="img-fluid center-block border rounded mb-2">
                                <br>
                                Kerafol
                            </div>
                        </div>
                        <div class="col-3 col-lg">
                            <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                                <img src="https://www.jobs-oberpfalz.de/uploads/profile/509.png?s=120&d=identicon&r=PG" loading="lazy" class="img-fluid center-block border rounded mb-2 grayscale">
                                <br>
                                Deutsche Post
                            </div>
                        </div>
                        <div class="col-3 col-lg">
                            <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                                <img src="https://www.jobs-oberpfalz.de/uploads/profile/65.png?s=120&d=identicon&r=PG" loading="lazy" class="img-fluid center-block border rounded mb-2">
                                <br>
                                Richard Rank
                            </div>
                        </div>
                        <div class="col-3 col-lg">
                            <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                                <img src="https://www.jobs-oberpfalz.de/uploads/profile/1178.jpg?s=120&d=identicon&r=PG" loading="lazy" class="img-fluid center-block border rounded mb-2 grayscale">
                                <br>
                                Backhaus Kutzer
                            </div>
                        </div>
                        <div class="col-3 col-lg">
                            <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                                <img src="https://www.jobs-oberpfalz.de/uploads/profile/1228.jpg?s=120&d=identicon&r=PG" loading="lazy" class="img-fluid center-block border rounded mb-2">
                                <br>
                                Bilfinger
                            </div>
                        </div>
                        <div class="col-3 col-lg">
                            <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                                <img src="https://www.jobs-oberpfalz.de/uploads/profile/1006.png?s=120&d=identicon&r=PG" loading="lazy" class="img-fluid center-block border rounded mb-2">
                                <br>
                                Höhbauer
                            </div>
                        </div>
                        <div class="col-3 col-lg">
                            <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                                <img src="https://www.jobs-oberpfalz.de/uploads/profile/762.jpg?s=120&d=identicon&r=PG" loading="lazy" class="img-fluid center-block border rounded mb-2">
                                <br>
                                Sparkasse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-5 mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2 id="funktionen" class="mb-3">Noch Fragen?</h2>
                </div>
                <div class="col-10 offset-1">
                    <p class="fs-5">
                        Jetzt persönlich Anforderungen und Fragen klären. Telefonisch oder per Chat.
                    </p>
                    <a href="tel:+4996120498290" class="ci-color fs-3">
                        <svg style="fill: #f49c35; width: 24px; margin-right: 8px; margin-top:-7px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M370.43 192.25A64 64 0 0 0 314.86 160H197.14a64 64 0 0 0-55.57 32.25L36.22 376.62A32 32 0 0 0 32 392.5V448a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32v-55.5a32 32 0 0 0-4.22-15.88zM256 384a72 72 0 1 1 72-72 72 72 0 0 1-72 72zm250.18-261C436.76 65 347.38 32 256 32S75.24 65 5.82 123A16.45 16.45 0 0 0 0 135.64V192a16 16 0 0 0 16 16h70.11a16 16 0 0 0 14.31-8.85L128 128c39.9-17.28 83.2-24 128-24 44.77 0 88.07 6.72 128 24l27.58 71.15a16 16 0 0 0 14.31 8.85H496a16 16 0 0 0 16-16v-56.36a16.45 16.45 0 0 0-5.82-12.64z"/></svg>
                        0961 / 20498290
                    </a>
                    <br>
                    <br>
                    <a href="" class="btn btn-ci btn-lg btn-intercom">Jetzt direkt chatten </a>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </section>
    </div>
    </div>
@stop
@section('scripts')
<script>
    $(document).ready(function() {
        $('.logo-carousel').slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            responsive: [{
            breakpoint: 2000,
            settings: {
                slidesToShow: 7
            }
            }, {
            breakpoint: 1200,
            settings: {
                slidesToShow: 6
            }
            }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
            }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
            }]
        });
    });
</script>
<script src="{{asset('template/js/pages/main/methods.js')}}"></script>
<script src="{{asset('template/js/pages/main/script.js')}}"></script>
@if(!Auth::check())
<script>
    if (localStorage.getItem("invite") != null) {
        $("#btn-register2").html(`
            Jetzt Arbeitgeberkonto aktivieren
            <svg style="fill: #e42828; width: 25px; margin-top:-18px; margin-left:10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z"/></svg>
        `);
    }
</script>
@endif
@stop