<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-3">
            <div class="card-counter primary">
                <i class="fa-solid fa-puzzle-piece"></i>
                <span class="count-numbers">{{ $skillsCount > 0 ? $skillsCount : 0 }}</span>
                <span class="count-name">Skills</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter danger">
                <i class="fa-solid fa-users"></i>
                <span class="count-numbers">{{ $clientsCount > 0 ? $clientsCount : 0 }}</span>
                <span class="count-name">Clients</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter success">
                <i class="fa-brands fa-dropbox"></i>
                <span class="count-numbers">{{ $projectsCount > 0 ? $projectsCount : 0 }}</span>
                <span class="count-name">Project</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter info">
                <i class="fa-solid fa-people-carry-box"></i>
                <span class="count-numbers">{{ $servicesCount > 0 ? $servicesCount : 0 }}</span>
                <span class="count-name">Services</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <!-- Bar Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart (Project)</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                    <hr>
                </div>
            </div>

        </div>
    </div>

</div>
