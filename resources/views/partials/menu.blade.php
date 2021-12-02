<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('lead_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/qualifications-reqs*") ? "c-show" : "" }} {{ request()->is("admin/edp-reqs*") ? "c-show" : "" }} {{ request()->is("admin/status-leads*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-user-plus c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.lead.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('qualifications_req_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.qualifications-reqs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/qualifications-reqs") || request()->is("admin/qualifications-reqs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-graduation-cap c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.qualificationsReq.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('edp_req_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.edp-reqs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/edp-reqs") || request()->is("admin/edp-reqs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-chalkboard-teacher c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.edpReq.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('status_lead_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.status-leads.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/status-leads") || request()->is("admin/status-leads/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-clipboard-list c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.statusLead.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('application_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/qualifications-apps*") ? "c-show" : "" }} {{ request()->is("admin/edp-apps*") ? "c-show" : "" }} {{ request()->is("admin/ada-apps*") ? "c-show" : "" }} {{ request()->is("admin/status-apps*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-file-signature c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.application.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('memberships_app_access')
                        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/corporates-apps*") ? "c-show" : "" }} {{ request()->is("admin/individuals-apps*") ? "c-show" : "" }}">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-globe c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.membershipsApp.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('corporates_app_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.corporates-apps.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/corporates-apps") || request()->is("admin/corporates-apps/*") ? "c-active" : "" }}">
                                            <i class="fa-fw far fa-building c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.corporatesApp.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('individuals_app_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.individuals-apps.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/individuals-apps") || request()->is("admin/individuals-apps/*") ? "c-active" : "" }}">
                                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.individualsApp.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('qualifications_app_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.qualifications-apps.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/qualifications-apps") || request()->is("admin/qualifications-apps/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-graduation-cap c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.qualificationsApp.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('edp_app_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.edp-apps.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/edp-apps") || request()->is("admin/edp-apps/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-chalkboard-teacher c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.edpApp.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('ada_app_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.ada-apps.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/ada-apps") || request()->is("admin/ada-apps/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-award c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.adaApp.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('status_app_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.status-apps.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/status-apps") || request()->is("admin/status-apps/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-clipboard-list c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.statusApp.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('profile_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/corporates/*") ? "c-show" : "" }} {{ request()->is("admin/individuals/*") ? "c-show" : "" }} {{ request()->is("admin/officers*") ? "c-show" : "" }} {{ request()->is("admin/facilitators*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.profile.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('corporate_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.corporates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/corporates") || request()->is("admin/corporates/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-building c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.corporate.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('individual_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.individuals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/individuals") || request()->is("admin/individuals/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.individual.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('officer_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.officers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/officers") || request()->is("admin/officers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-secret c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.officer.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('facilitator_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.facilitators.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/facilitators") || request()->is("admin/facilitators/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-astronaut c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.facilitator.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('membership_access')
            <li class="c-sidebar-nav-dropdown 
            {{ request()->is("admin/memberships-corporates*") ? "c-show" : "" }} 
            {{ request()->is("admin/payments-corporates*") ? "c-show" : "" }} 
            {{ request()->is("admin/training-credits-corporates*") ? "c-show" : "" }} 
            {{ request()->is("admin/support-funds-corporates*") ? "c-show" : "" }} 
            {{ request()->is("admin/memberships-individuals*") ? "c-show" : "" }} 
            {{ request()->is("admin/payments-individuals*") ? "c-show" : "" }} 
            {{ request()->is("admin/training-credits-individuals*") ? "c-show" : "" }} 
            {{ request()->is("admin/support-funds-individuals*") ? "c-show" : "" }} 
            {{ request()->is("admin/credits-funds-purposes*") ? "c-show" : "" }} 
            {{ request()->is("admin/support-funds*") ? "c-show" : "" }} 
            {{ request()->is("admin/member-classes*") ? "c-show" : "" }} 
            {{ request()->is("admin/status-memberships*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-globe c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.membership.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('corporate_membership_access')
                        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/memberships-corporates*") ? "c-show" : "" }} {{ request()->is("admin/payments-corporates*") ? "c-show" : "" }} {{ request()->is("admin/training-credits-corporates*") ? "c-show" : "" }} {{ request()->is("admin/support-funds-corporates*") ? "c-show" : "" }}">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw far fa-building c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.corporateMembership.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('memberships_corporate_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.memberships-corporates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/memberships-corporates") || request()->is("admin/memberships-corporates/*") ? "c-active" : "" }}">
                                            <i class="fa-fw fas fa-building c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.membershipsCorporate.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('payments_corporate_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.payments-corporates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/payments-corporates") || request()->is("admin/payments-corporates/*") ? "c-active" : "" }}">
                                            <i class="fa-fw far fa-money-bill-alt c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.paymentsCorporate.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('training_credits_corporate_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.training-credits-corporates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/training-credits-corporates") || request()->is("admin/training-credits-corporates/*") ? "c-active" : "" }}">
                                            <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.trainingCreditsCorporate.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('support_funds_corporate_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.support-funds-corporates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/support-funds-corporates") || request()->is("admin/support-funds-corporates/*") ? "c-active" : "" }}">
                                            <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.supportFundsCorporate.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('individual_membership_access')
                        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/memberships-individuals*") ? "c-show" : "" }} {{ request()->is("admin/payments-individuals*") ? "c-show" : "" }} {{ request()->is("admin/training-credits-individuals*") ? "c-show" : "" }} {{ request()->is("admin/support-funds-individuals*") ? "c-show" : "" }}">
                            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.individualMembership.title') }}
                            </a>
                            <ul class="c-sidebar-nav-dropdown-items">
                                @can('memberships_individual_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.memberships-individuals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/memberships-individuals") || request()->is("admin/memberships-individuals/*") ? "c-active" : "" }}">
                                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.membershipsIndividual.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('payments_individual_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.payments-individuals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/payments-individuals") || request()->is("admin/payments-individuals/*") ? "c-active" : "" }}">
                                            <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.paymentsIndividual.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('training_credits_individual_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.training-credits-individuals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/training-credits-individuals") || request()->is("admin/training-credits-individuals/*") ? "c-active" : "" }}">
                                            <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.trainingCreditsIndividual.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('support_funds_individual_access')
                                    <li class="c-sidebar-nav-item">
                                        <a href="{{ route("admin.support-funds-individuals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/support-funds-individuals") || request()->is("admin/support-funds-individuals/*") ? "c-active" : "" }}">
                                            <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                                            </i>
                                            {{ trans('cruds.supportFundsIndividual.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('credits_funds_purpose_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.credits-funds-purposes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/credits-funds-purposes") || request()->is("admin/credits-funds-purposes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-invoice-dollar c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.creditsFundsPurpose.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('support_fund_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.support-funds.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/support-funds") || request()->is("admin/support-funds/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-hands-helping c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.supportFund.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('member_class_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.member-classes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/member-classes") || request()->is("admin/member-classes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.memberClass.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('status_membership_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.status-memberships.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/status-memberships") || request()->is("admin/status-memberships/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-clipboard-list c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.statusMembership.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('qualification_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/enrolments-qualifications*") ? "c-show" : "" }} {{ request()->is("admin/payments-qualifications*") ? "c-show" : "" }} {{ request()->is("admin/results-modules*") ? "c-show" : "" }} {{ request()->is("admin/class-intakes*") ? "c-show" : "" }} {{ request()->is("admin/courses*") ? "c-show" : "" }} {{ request()->is("admin/modules*") ? "c-show" : "" }} {{ request()->is("admin/grades*") ? "c-show" : "" }} {{ request()->is("admin/achievements*") ? "c-show" : "" }} {{ request()->is("admin/status-qualifications*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-graduation-cap c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.qualification.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('enrolments_qualification_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.enrolments-qualifications.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/enrolments-qualifications") || request()->is("admin/enrolments-qualifications/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-graduate c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.enrolmentsQualification.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('payments_qualification_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.payments-qualifications.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/payments-qualifications") || request()->is("admin/payments-qualifications/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.paymentsQualification.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('results_module_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.results-modules.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/results-modules") || request()->is("admin/results-modules/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-chart-line c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.resultsModule.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('class_intake_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.class-intakes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/class-intakes") || request()->is("admin/class-intakes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-chalkboard c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.classIntake.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('course_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.courses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/courses") || request()->is("admin/courses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-book c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.course.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('module_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.modules.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/modules") || request()->is("admin/modules/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.module.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('grade_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.grades.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/grades") || request()->is("admin/grades/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-star c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.grade.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('achievement_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.achievements.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/achievements") || request()->is("admin/achievements/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-trophy c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.achievement.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('status_qualification_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.status-qualifications.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/status-qualifications") || request()->is("admin/status-qualifications/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-clipboard-list c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.statusQualification.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('edp_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/admissions-edps*") ? "c-show" : "" }} {{ request()->is("admin/payments-edps*") ? "c-show" : "" }} {{ request()->is("admin/programmes*") ? "c-show" : "" }} {{ request()->is("admin/status-edps*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-chalkboard-teacher c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.edp.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('admissions_edp_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.admissions-edps.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/admissions-edps") || request()->is("admin/admissions-edps/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-tie c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.admissionsEdp.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('payments_edp_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.payments-edps.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/payments-edps") || request()->is("admin/payments-edps/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.paymentsEdp.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('programme_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.programmes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/programmes") || request()->is("admin/programmes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-book-open c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.programme.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('status_edp_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.status-edps.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/status-edps") || request()->is("admin/status-edps/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-clipboard-list c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.statusEdp.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('ada_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/applicants-adas*") ? "c-show" : "" }} {{ request()->is("admin/awards*") ? "c-show" : "" }} {{ request()->is("admin/status-adas*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-award c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.ada.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('applicants_ada_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.applicants-adas.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/applicants-adas") || request()->is("admin/applicants-adas/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-friends c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.applicantsAda.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('award_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.awards.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/awards") || request()->is("admin/awards/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-award c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.award.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('status_ada_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.status-adas.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/status-adas") || request()->is("admin/status-adas/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-clipboard-list c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.statusAda.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('certificate_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.certificates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/certificates") || request()->is("admin/certificates/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-certificate c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.certificate.title') }}
                </a>
            </li>
        @endcan
        @can('payment_source_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.payment-sources.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/payment-sources") || request()->is("admin/payment-sources/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-dollar-sign c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.paymentSource.title') }}
                </a>
            </li>
        @endcan
        @can('level_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.levels.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/levels") || request()->is("admin/levels/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-signal c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.level.title') }}
                </a>
            </li>
        @endcan
        @can('venue_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.venues.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/venues") || request()->is("admin/venues/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-map-marker-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.venue.title') }}
                </a>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/audit-logs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>