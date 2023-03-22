    <!--==================== SKILLS ====================-->
    <section class="skills section" id="skills">
        <h2 class="section__title">Skills</h2>
        <span class="section__subtitle">My technical lever</span>

        <div class="skills_container container grid">

            <div>


                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil uil-brackets-curly skills_icon"></i>

                        <div>
                            <h1 class="skills_title">{{ $frontEnd->name }}</h1>
                            <span class="skills_subtitle">More than {{ $frontEnd->experience }} years</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">

                        @foreach ($frontEnd->skills as $row)
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">{{ $row->name }}</h3>
                                    <span class="skills_number">{{ $row->level }}%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage"
                                        style="width: {{ $row->level }}% !important"></span>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>


                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil uil-cloud-database-tree skills_icon"></i>

                        <div>
                            <h1 class="skills_title">{{ $backEnd->name }}</h1>
                            <span class="skills_subtitle">More than {{ $backEnd->experience }} years</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">


                        @foreach ($backEnd->skills as $row)
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">{{ $row->name }}</h3>
                                    <span class="skills_number">{{ $row->level }}%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage"
                                        style="width: {{ $row->level }}% !important"></span>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>

            </div>

            <div>

                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil uil-grid skills_icon"></i>

                        <div>
                            <h1 class="skills_title">{{ $framework->name }}</h1>
                            <span class="skills_subtitle">More than {{ $framework->level }} years</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">


                        @foreach ($framework->skills as $row)
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">{{ $row->name }}</h3>
                                    <span class="skills_number">{{ $row->level }}%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage"
                                        style="width: {{ $row->level }}% !important"></span>
                                </div>
                            </div>
                        @endforeach





                    </div>
                </div>

                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil uil-database skills_icon"></i>

                        <div>
                            <h1 class="skills_title">{{ $dataBase->name }}</h1>
                            <span class="skills_subtitle">More than {{ $dataBase->level }} years</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">

                        @foreach ($dataBase->skills as $row)
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">{{ $row->name }}</h3>
                                    <span class="skills_number">{{ $row->level }}%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage"
                                        style="width: {{ $row->level }}% !important"></span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>




            </div>
        </div>
    </section>
