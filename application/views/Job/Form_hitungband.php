<form id="formhitungband" method="post" action="<?php echo base_url('Job/Band') ?> ">
         <div class="form-group row">
          <label ondragstart="return false;" for="inputjob" class="col-sm-4 col-form-label">Job Index</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="" value="<?=$datajob['Job_index']?>" disabled>
              <input type="hidden"  name="idjob" id="idjob" value="<?=$datajob['id']?>">
            </div>
        </div>
        <div class="form-group row">
          <label ondragstart="return false;" for="inputjobclass" class="col-sm-4 col-form-label">Job Title</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="" value="<?=$datajob['Job_title']?>" disabled>
            </div>
        </div>
        <div class="form-group row">
          <label ondragstart="return false;" for="inputlevel" class="col-sm-4 col-form-label">Business Unit</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="" value="<?=$datajob['company_name']?>" disabled>
            </div>
        </div>
        <div class="form-group row">
          <label ondragstart="return false;" for="inputlevel" class="col-sm-4 col-form-label">Doc. Ref</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="" value="<?=$datajob['Doc_ref']?>" disabled >
            </div>
        </div>

   <?php if($datajob['business_grade'] >=19 && $datajob['business_grade'] <=25) { ?>

        <center><hr width="80%"></center>
          <div class="form-group row">
            <label ondragstart="return false;" class="col-sm-12 col-form-label">Managing people a focus?
              <a href="#" title="Managing People a Focus?" data-toggle="popover" data-trigger="hover" data-content="
              Objective - Separate jobs that have a focus on managing people from those whose focus is on their technical expertise and individual contribution.
              The 'weight' of dotted-line reporting can be assessed through factors such as frequency and nature of the communication, the coordination processes and area of influence."><i class="fas fa-question-circle"></i></a></label>
              <div class="col-sm-12">
                  <input type="radio" name="rad1" id="rad1" value="Yes_Focus" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that contribute and achieve results through others (team, colleagues, etc.); The performance of the jobholder is measured by the results of the team; The job is concentrated around managing projects and the performance of the jobholder is measured by the achievement of project milestones; Jobs that manage people, projects and/or processes; Jobs that provide organization-wide functional leadership, not necessarily through direct reports, but through dotted-line reports.
                  ">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Chief Financial Officer (CFO); Head of Engineering; Customer Service Supervisor; Plant Manager; R&D Director"><i class="fas fa-info-circle"></i></a></a>
                  &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="rad1" id="rad1" value="No_Focus" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Individual contributors; Jobs that are designed around profound expertise rather than people management (deep technical experts).">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Financial Planning Analyst; Engineer; Customer Service Representative; Plant Operator; Lab Scientist; Client Relationship Manager"><i class="fas fa-info-circle"></i></a></a>
              </div>
          </div>

          <div id="specific1" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Specific job functional knowledge?
              <a href="#" title="Specific job functional knowledge?" data-toggle="popover" data-trigger="hover" data-content="
              Objective - Separate those jobs that require knowledge or defined skills from other jobs that do not.

              Job functional knowledge is defined as that level of understanding in a body of specific knowledge (e.g. tasks, guidelines, systems, principles) to perform the specific tasks associated with the job.
              This level of knowledge may be linked with a profession or specific job category and will not typically be specific to a particular organization, industry or a location of activity (e.g. country or region).
              This knowledge requirement may be considered in terms of technical or subject knowledge and may be broad (general finance) or narrow (financial accounting) in exact specifications depending on the requirements of the job.
              "><i class="fas fa-question-circle"></i></a></label>
              <div class="col-sm-12">
                    <input type="radio" name="rad2" id="rad2" value="Yes_Specific" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that require a specialized field of knowledge;
                    Jobs that require knowledge of processes, principles or procedures essential to fulfill the job;
                    Jobs that have acquired knowledge about the job and tasks, either through specialized education or training.">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Assembly Technician; Lab Technician; Office Manager; Accountant; Chief Engineer"><i class="fas fa-info-circle"></i></a></a>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="rad2" id="rad2" value="No_Specific" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Jobs that contribute through providing a simple repetitive task;
                    Jobs that do not require specific training or education.">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Machine Operator; Lab Assistant; Driver/Messenger; Data Entry/Filing Clerk; Cleaner"><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="band_1"  value="1" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                  <input type="checkbox" name="Band" id="Band" value="1" class="rad"/>&nbsp;&nbsp;1
                </div>
            </div>
          </div>

          <div id="specific_yes" style="display:none">
           <div class="form-group row">
             <label ondragstart="return false;" class="col-sm-12 col-form-label">Independence in applying professional expertise?
               <a href="#" title="Independence in applying professional expertise?" data-toggle="popover" data-trigger="hover" data-content="
               Objective - Separate the jobs that contribute by applying professional expertise from those that contribute within a well-defined framework.

               Professional jobs, as compared to technical and administrative jobs, are those typically requiring mastery of a specialized field of expertise, normally related to a professional qualification. In some cases 'professional qualification' takes the form of certification from a professional body but in other cases the term refers to a specialist university education at undergraduate level."><i class="fas fa-question-circle"></i></a></label>
               <div class="col-md-12">
                 <input type="radio" name="rad3" id="rad3" value="Yes_ind" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that are typically filled by qualified professionals who are expected to use their judgement to apply expertise; Jobs that are expected to work independently with minimal supervision.">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Engineer; Accountant; HR Business Partner; Senior Buyer; Research Scientist"><i class="fas fa-info-circle"></i></a></a>
                 &nbsp;&nbsp;&nbsp;
                 <input type="radio" name="rad3" id="rad3" value="No_ind" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Jobs that have clearly defined procedures and tasks; Jobs that have defined guidelines to aid in decision making.">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Assembly Technician; Accounting Clerk; HR Administrative Assistant; Customer Service Representative; Sales Forecast Analyst"><i class="fas fa-info-circle"></i></a></a>
               </div>
           </div>
         </div>

          <div id="ind_yes" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Subject matter expert?
                <a href="#" title="Subject matter expert?" data-toggle="popover" data-trigger="hover" data-content="
                Objective - Separate the technical experts from other professionals.

                A subject matter expert (SME) (also sometimes called a domain expert) is a job which requires the job-holder to be a leading expert in a particular subject or technical topic.
                The job requires a job holder with special knowledge or skills in a particular subject of interest to the organization, e.g. an accountant is an expert in the domain of accountancy as compared to the development of accounting software which would require knowledge in two different domains, namely accounting and software.
                This band should be thought of as representing a spectrum running from specialists in a particular subject area to the most renowned expert jobs (e.g. gurus) requiring the highest levels of expertise as expected of leading experts."><i class="fas fa-question-circle"></i></a></label>
                <div class="col-md-12">
                  <input type="radio" name="rad4" id="rad4" value="Yes_sub" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that require deep technical expertise; Jobs that are professional/technical thought leaders; Jobs that are leaders in areas of specialized knowledge; Jobs that have few technical/professional peers.">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Lead Engineer; Head of Government Bonds; Director of Compensation & Benefits; Head of Customer Insights; Chief Engineer"><i class="fas fa-info-circle"></i></a></a>
                  &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="rad4" id="rad4" value="no_sub" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Jobs that although highly professional, do not have a specialized area of expertise on which they are consulted; Jobs that collect information for others to make decisions.">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Engineer; Accountant; HR Manager; Account Manager; Quality Control Analyst"><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="band_2" style="display:none" value="2">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                  <input type="checkbox" name="Band" id="Band" value="2" class="rad"/>&nbsp;&nbsp; 2
                </div>
            </div>
          </div>

          <div id="band_3" style="display:none" value="3IC">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                  <input type="checkbox" name="Band" id="Band" value="3IC" class="rad"/>&nbsp;&nbsp; 3IC
                </div>
            </div>
          </div>

          <div id="band_4" style="display:none" value="4IC">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                  <input type="checkbox" name="Band" id="Band" value="4IC" class="rad"/>&nbsp;&nbsp; 4IC
                </div>
            </div>
          </div>

          <div id="focus_yes" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Manage professionals / managers?
                <a href="#" title="Manage professionals / managers?" data-toggle="popover" data-trigger="hover" data-content="
                Objective - Separate managers and supervisors, for example, jobs that manage professional and/or managers from jobs that supervise clerks/operators/technicians.

                The 4M band covers managers below Heads of Function and/or those reporting to senior management where the jobs contribute to the organization through leveraging the work of others, typically through operational management of a team(s).
                Positions with supervisory responsibility not regarded as having full management status would not be included here.
                The 3M band covers first-line management including supervisory positions and junior managers where responsibility for support and/or technical staff represents a large proportion of the job."><i class="fas fa-question-circle"></i></a></label>
                <div class="col-md-12">
                    <input type="radio" name="rad5" id="rad5" value="Yes_man" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that have full line management (hire, fire, performance, salary decisions, etc.) responsibility for subordinates who are to have a university degree (or equivalent knowledge through experience) to fulfill their job;
                    Jobs that manage through subordinate managers/supervisors
                    ">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Chief Financial Officer (CFO); Engineering Works Manager; Director/Head of Marketing; Factory or Plant Manager; Area Sales Manager"><i class="fas fa-info-circle"></i></a></a>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="rad5" id="rad5" value="no_man" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Jobs that supervise operator, technician and/or clerical jobs (regardless of the number of employees supervised);
                    Jobs that are typically the first line of management contact for non-exempt employees;
                    Jobs that provide guidance such as delegating work assignments.
                    ">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Payroll Supervisor; Engineering Team Leader; Marketing Production Work Leader; Warehouse Supervisor; Call Center Supervisor"><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="band_5" style="display:none" value="3M">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                    <input type="checkbox" name="Band" id="Band" value="3M" class="rad"/>&nbsp;&nbsp; 3M
                </div>
            </div>
          </div>

          <div id="man_yes" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Set/significantly influence Organizational functional strategy?
                <a href="#" title="Set/significantly influence Organizational functional strategy?" data-toggle="popover" data-trigger="hover" data-content="
                Objective - To separate jobs that are able to determine or significantly impact the strategy of an organization function within a business unit."><i class="fas fa-question-circle"></i></a></label>
                <div class="col-md-12">
                    <input type="radio" name="rad6" id="rad6" value="Yes_set" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that head up a corporate organization function (i.e. Finance, HR, etc.);
                    Jobs that, although not managing an organization function, have a significant impact on its strategic direction.">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content=""><i class="fas fa-info-circle"></i></a></a>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="rad6" id="rad6" value="no_set" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Sub-function heads that do not directly contribute to the strategy of an organization function
                    Jobs that are involved more in operational day-to-day management of team(s).">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content=""><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="band_6" style="display:none" value="4M">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                      <input type="checkbox" name="Band" id="Band" value="4M" class="rad"/>&nbsp;&nbsp; 4M
                </div>
            </div>
          </div>

          <div id="set_yes" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Set/significantly influence business strategy?
                <a href="#" title="Set/significantly influence business strategy?" data-toggle="popover" data-trigger="hover" data-content="
                Objective - To separate jobs that are able to determine or significantly impact the strategy of an organization function within a business unit."><i class="fas fa-question-circle"></i></a></label>
                <div class="col-md-12">
                      <input type="radio" name="rad7" id="rad7" value="Yes_setbis" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that head up a corporate organization function (i.e. Finance, HR, etc.);
                      Jobs that, although not managing an organization function, have a significant impact on its strategic direction.">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Chief Financial Officer (CFO); Director of Engineering; Chief Operating Officer (COO); Head of R&D; Head of Sales & Marketing"><i class="fas fa-info-circle"></i></a></a>
                      &nbsp;&nbsp;&nbsp;
                      <input type="radio" name="rad7" id="rad7" value="no_setbis" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Sub-function heads that do not directly contribute to the strategy of an organization function;
                      Jobs that are involved more in operational day-to-day management of team(s).">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Financial Controller; Head of Engineering; Head of Facilities; Lead Scientist; VP, Regional Marketing"><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="band_7" style="display:none" value="5FS">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                    <input type="checkbox" name="Band" id="Band" value="5FS" class="rad"/>&nbsp;&nbsp; 5FS
                </div>
            </div>
          </div>

          <div id="setbis_yes" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">CEO or Business Unit Head?
                <a href="#" title="CEO or Business Unit Head?" data-toggle="popover" data-trigger="hover" data-content="
                Objective - Identify the top position in the business for the Business Unit that the job is being graded within.

                There can only be ONE job within a Business Unit which answers YES to the question below.
                As Global Grading allows for the creation of multiple Business Units, the answer to this question is based on the Business Unit that the job is being graded within. If the Business Unit is defined as the Parent entity, the CEO of the organization would respond 'yes' to this question and the four heads of lines of businesses within the organization would each answer 'no.' If the Business Unit is defined as a specific Line of Business (such as Consumer Products), then the CEO of that LOB would respond 'yes' to this question and all other Job within the Consumer Products LOB would each answer NO.
                "><i class="fas fa-question-circle"></i></a></label>
                <div class="col-md-12">
                      <input type="radio" name="rad8" id="rad8" value="Yes_ceo" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="The highest job in the organization;
                      The job holds Profit and Loss responsibility for the business unit.
                      ">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="CEO; Business Unit Head (of the Business Unit that the job is being graded within)"><i class="fas fa-info-circle"></i></a></a>
                      &nbsp;&nbsp;&nbsp;
                      <input type="radio" name="rad8" id="rad8" value="no_ceo" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Function heads, regardless of the size or importance of the organization function, and regardless of whether a member of the board or not All other jobs.
                      ">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="All other jobs below CEO or GGS Business Unit Head"><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="band_8" style="display:none" value="5BS">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                    <input type="checkbox" name="Band" id="Band" value="5BS" class="rad"/>&nbsp;&nbsp; 5BS
                </div>
            </div>
          </div>

          <div id="band_9" style="display:none" value="6">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                    <input type="checkbox" name="Band" id="Band" value="6" class="rad"/>&nbsp;&nbsp; 6
                </div>
            </div>
          </div>

          <script>
          $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
          });
          </script>

<script type="text/javascript">
      $(function(){
        $(":radio.rad").click(function(){
          $("#specific1, #specific_yes, #band_1, #No_ind, #band_2, #band_3, #band_4, #ind_yes, #focus_yes, #band_5, #man_yes, #band_6, #set_yes, #band_7, #band_8, #band_9 ").hide()
          if($(this).val() == "No_Focus"){
            $("#specific1").show();
          }else if ($(this).val() == "No_Specific") {
            $("#specific1").show();
            $("#band_1").show();
        }else if ($(this).val() == "Yes_Specific") {
            $("#specific1").show();
            $("#specific_yes").show();
        }else if ($(this).val() == "No_ind"){
          $("#specific1").show();
            $("#specific_yes").show();
            $("#band_2").show();
        }else if ($(this).val() == "Yes_ind"){
          $("#specific1").show();
            $("#specific_yes").show();
            $("#ind_yes").show();
        }else if ($(this).val() == "Yes_sub"){
          $("#specific1").show();
            $("#specific_yes").show();
            $("#ind_yes").show();
            $("#band_4").show();
        }else if ($(this).val() == "no_sub"){
          $("#specific1").show();
            $("#specific_yes").show();
            $("#ind_yes").show();
            $("#band_3").show();
        }else if ($(this).val() == "Yes_Focus"){
          $("#focus_yes").show();
        }else if ($(this).val() == "no_man"){
          $("#focus_yes").show();
          $("#band_5").show();
        }else if ($(this).val() == "Yes_man"){
          $("#focus_yes").show();
          $("#man_yes").show();
        }else if ($(this).val() == "no_set"){
          $("#focus_yes").show();
          $("#man_yes").show();
          $("#band_6").show();
        }else if ($(this).val() == "Yes_set"){
          $("#focus_yes").show();
          $("#man_yes").show();
          $("#set_yes").show();
        }else if ($(this).val() == "no_setbis"){
          $("#focus_yes").show();
          $("#man_yes").show();
          $("#set_yes").show();
          $("#band_7").show();
          $("#setbis_yes").hide();
        }else if ($(this).val() == "Yes_setbis"){
          $("#focus_yes").show();
          $("#man_yes").show();
          $("#set_yes").show();
          $("#setbis_yes").show();
        }else if ($(this).val() == "no_ceo"){
            $("#focus_yes").show();
            $("#man_yes").show();
            $("#set_yes").show();
            $("#band_8").show();
        }else if ($(this).val() == "Yes_ceo"){
            $("#focus_yes").show();
            $("#man_yes").show();
            $("#set_yes").show();
            $("#band_9").show();
        }


        });
      });
</script>

  <?php }else{ ?>
          <div class="form-group row">
            <label ondragstart="return false;" class="col-sm-12 col-form-label">Managing people a focus?
            <a href="#" title="Managing People a Focus?" data-toggle="popover" data-trigger="hover" data-content="
            Objective - Separate jobs that have a focus on managing people from those whose focus is on their technical expertise and individual contribution.
            The 'weight' of dotted-line reporting can be assessed through factors such as frequency and nature of the communication, the coordination processes and area of influence."><i class="fas fa-question-circle"></i></a></label>
              <div class="col-sm-12">
                  <input type="radio" name="rad1" id="rad1" value="Yes_Focus" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that contribute and achieve results through others (team, colleagues, etc.); The performance of the jobholder is measured by the results of the team; The job is concentrated around managing projects and the performance of the jobholder is measured by the achievement of project milestones; Jobs that manage people, projects and/or processes; Jobs that provide organization-wide functional leadership, not necessarily through direct reports, but through dotted-line reports.
                  ">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Chief Financial Officer (CFO); Head of Engineering; Customer Service Supervisor; Plant Manager; R&D Director"><i class="fas fa-info-circle"></i></a></a>
                  &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="rad1" id="rad1" value="No_Focus" class="rad"/> <a title="No" data-toggle="popover" data-trigger="hover" data-content="Individual contributors; Jobs that are designed around profound expertise rather than people management (deep technical experts).">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Financial Planning Analyst; Engineer; Customer Service Representative; Plant Operator; Lab Scientist; Client Relationship Manager"><i class="fas fa-info-circle"></i></a></a>
              </div>
          </div>

          <div id="specific1" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Specific job functional knowledge?
              <a href="#" title="Specific job functional knowledge?" data-toggle="popover" data-trigger="hover" data-content="
              Objective - Separate those jobs that require knowledge or defined skills from other jobs that do not.

              Job functional knowledge is defined as that level of understanding in a body of specific knowledge (e.g. tasks, guidelines, systems, principles) to perform the specific tasks associated with the job.
              This level of knowledge may be linked with a profession or specific job category and will not typically be specific to a particular organization, industry or a location of activity (e.g. country or region).
              This knowledge requirement may be considered in terms of technical or subject knowledge and may be broad (general finance) or narrow (financial accounting) in exact specifications depending on the requirements of the job.
              "><i class="fas fa-question-circle"></i></a></label>
              <div class="col-sm-12">
                    <input type="radio" name="rad2" id="rad2" value="Yes_Specific" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that require a specialized field of knowledge;
                    Jobs that require knowledge of processes, principles or procedures essential to fulfill the job;
                    Jobs that have acquired knowledge about the job and tasks, either through specialized education or training.">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Assembly Technician; Lab Technician; Office Manager; Accountant; Chief Engineer"><i class="fas fa-info-circle"></i></a></a>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="rad2" id="rad2" value="No_Specific" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Jobs that contribute through providing a simple repetitive task;
                    Jobs that do not require specific training or education.">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Machine Operator; Lab Assistant; Driver/Messenger; Data Entry/Filing Clerk; Cleaner"><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="band_1"  value="1" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                  <input type="checkbox" name="Band" id="Band" value="1" class="rad"/>&nbsp;&nbsp;1
                </div>
            </div>
          </div>

           <div id="specific_yes" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Independence in applying professional expertise?
                <a href="#" title="Independence in applying professional expertise?" data-toggle="popover" data-trigger="hover" data-content="
                Objective - Separate the jobs that contribute by applying professional expertise from those that contribute within a well-defined framework.

                Professional jobs, as compared to technical and administrative jobs, are those typically requiring mastery of a specialized field of expertise, normally related to a professional qualification. In some cases 'professional qualification' takes the form of certification from a professional body but in other cases the term refers to a specialist university education at undergraduate level."><i class="fas fa-question-circle"></i></a></label>
                <div class="col-md-12">
                  <input type="radio" name="rad3" id="rad3" value="Yes_ind" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that are typically filled by qualified professionals who are expected to use their judgement to apply expertise; Jobs that are expected to work independently with minimal supervision.">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Engineer; Accountant; HR Business Partner; Senior Buyer; Research Scientist"><i class="fas fa-info-circle"></i></a></a>
                  &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="rad3" id="rad3" value="No_ind" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Jobs that have clearly defined procedures and tasks; Jobs that have defined guidelines to aid in decision making.">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Assembly Technician; Accounting Clerk; HR Administrative Assistant; Customer Service Representative; Sales Forecast Analyst"><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="ind_yes" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Subject matter expert?
                <a href="#" title="Subject matter expert?" data-toggle="popover" data-trigger="hover" data-content="
                Objective - Separate the technical experts from other professionals.

                A subject matter expert (SME) (also sometimes called a domain expert) is a job which requires the job-holder to be a leading expert in a particular subject or technical topic.
                The job requires a job holder with special knowledge or skills in a particular subject of interest to the organization, e.g. an accountant is an expert in the domain of accountancy as compared to the development of accounting software which would require knowledge in two different domains, namely accounting and software.
                This band should be thought of as representing a spectrum running from specialists in a particular subject area to the most renowned expert jobs (e.g. gurus) requiring the highest levels of expertise as expected of leading experts."><i class="fas fa-question-circle"></i></a></label>
                <div class="col-md-12">
                  <input type="radio" name="rad4" id="rad4" value="Yes_sub" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that require deep technical expertise; Jobs that are professional/technical thought leaders; Jobs that are leaders in areas of specialized knowledge; Jobs that have few technical/professional peers.">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Lead Engineer; Head of Government Bonds; Director of Compensation & Benefits; Head of Customer Insights; Chief Engineer"><i class="fas fa-info-circle"></i></a></a>
                  &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="rad4" id="rad4" value="no_sub" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Jobs that although highly professional, do not have a specialized area of expertise on which they are consulted; Jobs that collect information for others to make decisions.">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Engineer; Accountant; HR Manager; Account Manager; Quality Control Analyst"><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="band_2" style="display:none" value="2">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                  <input type="checkbox" name="Band" id="Band" value="2" class="rad"/>&nbsp;&nbsp; 2
                </div>
            </div>
          </div>

          <div id="band_3" style="display:none" value="3IC">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                  <input type="checkbox" name="Band" id="Band" value="3IC" class="rad"/>&nbsp;&nbsp; 3IC
                </div>
            </div>
          </div>

          <div id="band_4" style="display:none" value="4IC">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                  <input type="checkbox" name="Band" id="Band" value="4IC" class="rad"/>&nbsp;&nbsp; 4IC
                </div>
            </div>
          </div>

          <div id="focus_yes" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Manage professionals / managers?
                <a href="#" title="Manage professionals / managers?" data-toggle="popover" data-trigger="hover" data-content="
                Objective - Separate managers and supervisors, for example, jobs that manage professional and/or managers from jobs that supervise clerks/operators/technicians.

                The 4M band covers managers below Heads of Function and/or those reporting to senior management where the jobs contribute to the organization through leveraging the work of others, typically through operational management of a team(s).
                Positions with supervisory responsibility not regarded as having full management status would not be included here.
                The 3M band covers first-line management including supervisory positions and junior managers where responsibility for support and/or technical staff represents a large proportion of the job."><i class="fas fa-question-circle"></i></a></label>
                <div class="col-md-12">
                    <input type="radio" name="rad5" id="rad5" value="Yes_man" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that have full line management (hire, fire, performance, salary decisions, etc.) responsibility for subordinates who are to have a university degree (or equivalent knowledge through experience) to fulfill their job;
                    Jobs that manage through subordinate managers/supervisors
                    ">&nbsp;Yes  &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Chief Financial Officer (CFO); Engineering Works Manager; Director/Head of Marketing; Factory or Plant Manager; Area Sales Manager"><i class="fas fa-info-circle"></i></a></a>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="rad5" id="rad5" value="no_man" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Jobs that supervise operator, technician and/or clerical jobs (regardless of the number of employees supervised);
                    Jobs that are typically the first line of management contact for non-exempt employees;
                    Jobs that provide guidance such as delegating work assignments.
                    ">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Payroll Supervisor; Engineering Team Leader; Marketing Production Work Leader; Warehouse Supervisor; Call Center Supervisor"><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="band_5" style="display:none" value="3M">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                    <input type="checkbox" name="Band" id="Band" value="3M" class="rad"/>&nbsp;&nbsp; 3M
                </div>
            </div>
          </div>

          <div id="man_yes" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Set/significantly influence business strategy?
                <a href="#" title="Set/significantly influence business strategy?" data-toggle="popover" data-trigger="hover" data-content="
                Objective - To separate jobs that are able to determine or significantly impact the strategy of an organization function within a business unit."><i class="fas fa-question-circle"></i></a></label>
                <div class="col-md-12">
                      <input type="radio" name="rad6" id="rad6" value="Yes_set" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="Jobs that head up a corporate organization function (i.e. Finance, HR, etc.);
                      Jobs that, although not managing an organization function, have a significant impact on its strategic direction.">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Chief Financial Officer (CFO); Director of Engineering; Chief Operating Officer (COO); Head of R&D; Head of Sales & Marketing"><i class="fas fa-info-circle"></i></a></a>
                      &nbsp;&nbsp;&nbsp;
                      <input type="radio" name="rad6" id="rad6" value="no_set" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Sub-function heads that do not directly contribute to the strategy of an organization function;
                      Jobs that are involved more in operational day-to-day management of team(s).">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="Financial Controller; Head of Engineering; Head of Facilities; Lead Scientist; VP, Regional Marketing"><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="band_6" style="display:none" value="4M">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                    <input type="checkbox" name="Band" id="Band" value="4M" class="rad"/>&nbsp;&nbsp; 4M
                </div>
            </div>
          </div>

          <div id="set_yes" style="display:none">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">CEO or Business Unit Head?
                <a href="#" title="CEO or Business Unit Head?" data-toggle="popover" data-trigger="hover" data-content="
                Objective - Identify the top position in the business for the Business Unit that the job is being graded within.

                There can only be ONE job within a Business Unit which answers YES to the question below.
                As Global Grading allows for the creation of multiple Business Units, the answer to this question is based on the Business Unit that the job is being graded within. If the Business Unit is defined as the Parent entity, the CEO of the organization would respond 'yes' to this question and the four heads of lines of businesses within the organization would each answer 'no.' If the Business Unit is defined as a specific Line of Business (such as Consumer Products), then the CEO of that LOB would respond 'yes' to this question and all other Job within the Consumer Products LOB would each answer NO.
                "><i class="fas fa-question-circle"></i></a></label>
                <div class="col-md-12">
                      <input type="radio" name="rad7" id="rad7" value="Yes_ceo" class="rad"/><a title="Yes" data-toggle="popover" data-trigger="hover" data-content="The highest job in the organization;
                      The job holds Profit and Loss responsibility for the business unit.
                      ">&nbsp;Yes &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="CEO; Business Unit Head (of the Business Unit that the job is being graded within)"><i class="fas fa-info-circle"></i></a></a>
                      &nbsp;&nbsp;&nbsp;
                      <input type="radio" name="rad7" id="rad7" value="no_ceo" class="rad"/><a title="No" data-toggle="popover" data-trigger="hover" data-content="Function heads, regardless of the size or importance of the organization function, and regardless of whether a member of the board or not All other jobs.
                      ">&nbsp;No &nbsp;<a href="#" title="Example Jobs" data-toggle="popover" data-trigger="hover" data-content="All other jobs below CEO or GGS Business Unit Head"><i class="fas fa-info-circle"></i></a></a>
                </div>
            </div>
          </div>

          <div id="band_7" style="display:none" value="5BS">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                    <input type="checkbox" name="Band" id="Band" value="5BS" class="rad"/>&nbsp;&nbsp; 5BS
                </div>
            </div>
          </div>

          <div id="band_8" style="display:none" value="6">
            <div class="form-group row">
              <label ondragstart="return false;" class="col-sm-12 col-form-label">Band : </label>
                <div class="col-md-12">
                    <input type="checkbox" name="Band" id="Band" value="6" class="rad"/>&nbsp;&nbsp; 6
                </div>
            </div>
          </div>

          <script>
          $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
          });
          </script>

<script type="text/javascript">
      $(function(){
        $(":radio.rad").click(function(){
          $("#specific1, #specific_yes, #band_1, #No_ind, #band_2, #band_3, #band_4, #ind_yes, #focus_yes, #band_5, #man_yes, #band_6, #set_yes, #band_7, #band_8, ").hide()
          if($(this).val() == "No_Focus"){
            $("#specific1").show();
          }else if ($(this).val() == "No_Specific") {
            $("#specific1").show();
            $("#band_1").show();
        }else if ($(this).val() == "Yes_Specific") {
            $("#specific1").show();
            $("#specific_yes").show();
        }else if ($(this).val() == "No_ind"){
            $("#specific1").show();
            $("#specific_yes").show();
            $("#band_2").show();
        }else if ($(this).val() == "Yes_ind"){
            $("#specific1").show();
            $("#specific_yes").show();
            $("#ind_yes").show();
        }else if ($(this).val() == "Yes_sub"){
            $("#specific1").show();
            $("#specific_yes").show();
            $("#ind_yes").show();
            $("#band_4").show();
        }else if ($(this).val() == "no_sub"){
            $("#specific1").show();
            $("#specific_yes").show();
            $("#ind_yes").show();
            $("#band_3").show();
        }else if ($(this).val() == "Yes_Focus"){
            $("#focus_yes").show();
        }else if ($(this).val() == "no_man"){
            $("#focus_yes").show();
            $("#band_5").show();
        }else if ($(this).val() == "Yes_man"){
            $("#focus_yes").show();
            $("#man_yes").show();
        }else if ($(this).val() == "no_set"){
            $("#focus_yes").show();
            $("#man_yes").show();
            $("#band_6").show();
        }else if ($(this).val() == "Yes_set"){
            $("#focus_yes").show();
            $("#man_yes").show();
            $("#set_yes").show();
        }else if ($(this).val() == "no_ceo"){
            $("#focus_yes").show();
            $("#man_yes").show();
            $("#set_yes").show();
            $("#band_7").show();
        }else if ($(this).val() == "Yes_ceo"){
            $("#focus_yes").show();
            $("#man_yes").show();
            $("#set_yes").show();
            $("#band_8").show();
        }


        });
      });
    </script>

  <?php } ?>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()">Tutup</button>
          <button type="submit" class="btn btn-primary">Hitung Band</button>
        </div>

</form>
