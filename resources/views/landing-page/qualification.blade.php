            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">
                <h2 class="section__title">Qualification</h2>
                <span class="section__subtitle">My personal journel</span>

                <div class="qualification_container container">
                    <div class="qualification_tabs">
                        <div class="qualificaction_button button--flex qualification_active" data-target="#education">
                            <i class="uil uil-graduation-cap qualification_icon"></i>
                            Education
                        </div>
                        <span>&ensp;</span>
                        <div class="qualificaction_button button--flex" data-target="#work">
                            <i class="uil uil-briefcase-alt qualification-icon"></i>
                            Work
                        </div>
                    </div>

                    <div class="qualification_sections">
                        <!--========== QUALIFICATION CONTENT 1 ==========-->
                        <div class="qualification_content qualification_active" data-content id="education">

                            @foreach ($educations->qualifications as $row)
                                @if ($loop->iteration % 2 == 0)
                                    <div class="qualification_data">
                                        <div></div>
                                        <div>
                                            <span class="qualification_rounder"></span>
                                            @if ($loop->iteration != $loop->last)
                                                <span class="qualification_line"></span>
                                            @endif
                                        </div>
                                        <div>
                                            <h3 class="qualification_title">{{ $row->title }}</h3>
                                            <span class="qualification_subtitle">{{ $row->company_or_institue }} -
                                                {{ $row->location }}</span>
                                            <div class="qualificaation_calender">
                                                <i class="uil uil-calender-alt"></i>
                                                {{ \Carbon\Carbon::parse($row->start_date)->format('Y-m') }}
                                                -
                                                {{ \Carbon\Carbon::parse($row->end_date)->format('Y-m') }}
                                            </div>
                                        </div>

                                    </div>
                                @else
                                    <div class="qualification_data">
                                        <div>
                                            <h3 class="qualification_title">{{ $row->title }}</h3>
                                            <span class="qualification_subtitle">{{ $row->company_or_institue }} -
                                                {{ $row->location }}</span>
                                            <div class="qualificaation_calender">
                                                <i class="uil uil-calender-alt"></i>
                                                {{ \Carbon\Carbon::parse($row->start_date)->format('Y-m') }}
                                                -
                                                {{ \Carbon\Carbon::parse($row->end_date)->format('Y-m') }}
                                            </div>
                                        </div>
                                        <div>
                                            <span class="qualification_rounder"></span>
                                            <span class="qualification_line"></span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach


                        </div>
                        <!--========== QUALIFICATION CONTENT 2 ==========-->
                        <div class="qualification_content" data-content id="work">

                            @foreach ($works->qualifications as $row)
                                @if ($loop->iteration % 2 == 0)
                                    <div class="qualification_data">
                                        <div>
                                            <h3 class="qualification_title">{{ $row->title }}</h3>
                                            <span class="qualification_subtitle">{{ $row->company_or_institue }} -
                                                {{ $row->location }}</span>
                                            <div class="qualificaation_calender">
                                                <i class="uil uil-calender-alt"></i>
                                                {{ \Carbon\Carbon::parse($row->start_date)->format('Y-m') }}
                                                -
                                                {{ \Carbon\Carbon::parse($row->end_date)->format('Y-m') }}
                                            </div>
                                        </div>
                                        <div>
                                            <span class="qualification_rounder"></span>
                                            <span class="qualification_line"></span>
                                        </div>
                                    </div>
                                @else
                                    <div class="qualification_data">
                                        <div></div>
                                        <div>
                                            <span class="qualification_rounder"></span>
                                            @if ($loop->iteration != $loop->last)
                                                <span class="qualification_line"></span>
                                            @endif
                                        </div>
                                        <div>
                                            <h3 class="qualification_title">{{ $row->title }}</h3>
                                            <span class="qualification_subtitle">{{ $row->company_or_institue }} -
                                                {{ $row->location }}</span>
                                            <div class="qualificaation_calender">
                                                <i class="uil uil-calender-alt"></i>
                                                {{ \Carbon\Carbon::parse($row->start_date)->format('Y-m') }}
                                                -
                                                {{ \Carbon\Carbon::parse($row->end_date)->format('Y-m') }}
                                            </div>
                                        </div>

                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
