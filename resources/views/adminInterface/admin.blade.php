<html>
<head>
    <meta name="robots" content="noindex, nofollow" />
	<link href="/css/admin.css" rel="stylesheet" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
</head>
	<body>
		
<h2>Post you JOB</h2>

<form id="jobProfileAdmin" method="post" action="/jobProfile/savejobProfile" style="border:1px solid #ccc">
  <div class="container">
      @if ($jobProfile)
         <input type="hidden" name="jobProfileID" value="{!! $jobProfile->id !!}"> 
      @endif

    <label><b>jobProfile Content</b></label><br> 
    <textarea class="ckeditor" name="jobProfile[jobProfileContent]">@if ($jobProfile){!! $jobProfile->jobProfileContent !!}@endif</textarea>
    <br>


    <label><b>Slug</b></label>
    <input type="text" name="jobProfile[slug]" 
        @if ($jobProfile)
            value="{!! $jobProfile->slug !!}"
        @endif
    required>
  <br>

  <label><b>Title(to display)</b></label>
     
    <input type="text" name="jobProfile[jobTitle]" 
        @if ($jobProfile)
            value="{!! $jobProfile->jobTitle !!}"
        @endif
    required><br>


     <label><b>organisation  Name</b></label>
     
    <input type="text" name="jobProfile[organisationName]" 
        @if ($jobProfile)
            value="{!! $jobProfile->organisationName !!}"
        @endif
    required><br>

     <label><b>total Vacancies</b></label>
     
    <input type="text" name="jobProfile[totalVacancies]" 
        @if ($jobProfile)
            value="{!! $jobProfile->totalVacancies !!}"
        @endif
    required><br>

    <label><b>pay scale</b></label>
     
    <input type="text" name="jobProfile[payscale]" 
        @if ($jobProfile)
            value="{!! $jobProfile->payscale !!}"
        @endif
    required><br>


    <label><b>company Url</b></label>
     
    <input type="text" name="jobProfile[companyUrl]" 
        @if ($jobProfile)
            value="{!! $jobProfile->companyUrl !!}"
        @endif
    required><br>
    
    <label><b>redirect Url</b></label>
     
    <input type="text" name="jobProfile[redirectUrl]" 
        @if ($jobProfile)
            value="{!! $jobProfile->redirectUrl !!}"
        @endif
    required><br>
    
    <label><b>Adevrtisement number</b></label>
     
    <input type="text" name="jobProfile[advNumber]" 
        @if ($jobProfile)
            value="{!! $jobProfile->advNumber !!}"
        @endif
    required><br>


    <label><b>seoTitle</b></label>
    <input type="text" name="jobProfile[seoTitle]" 
        @if ($jobProfile)
            value="{!! $jobProfile->seoTitle !!}"
        @endif
    required> <br>



    <label><b>seoDescription</b></label>
    <input type="text" name="jobProfile[seoDescription]" 
        @if ($jobProfile)
            value="{!! $jobProfile->seoDescription !!}"
        @endif
    required><br>

    <label><b> SEO Keywords</b></label>
    <input type="text" name="jobProfile[seoMetaTags]" 
        @if ($jobProfile)
            value="{!! $jobProfile->seoMetaTags !!}"
        @endif
    required>  <br>

     <label><b>Priority</b></label>
    <input type="text" name="jobProfile[priority]" 
        @if ($jobProfile)
            value="{!! $jobProfile->priority !!}"
        @endif
    required><br>

     <label><b>Active</b></label>
    <input type="text" name="jobProfile[active]" 
        @if ($jobProfile)
            value="{!! $jobProfile->active !!}"
        @endif
    required> <br>

     <label><b>All India</b></label>
    <input type="text" name="jobProfile[allIndia]" 
        @if ($jobProfile)
            value="{!! $jobProfile->allIndia !!}"
        @endif
    required> <br>



    <label><b>End Date for filling</b></label>
    <input type="text" name="jobProfile[endDate]" 
        @if ($jobProfile)
            value="{!! $jobProfile->endDate !!}"
        @endif
    required>

   
    <label><b>imagePath(if any)</b></label>
    <input type="text" name="jobProfile[jobImgPath]" 
        @if ($jobProfile)
            value="{!! $jobProfile->jobImgPath !!}"
        @endif
    required>

    <!-- <span class="tagGrp">
        <label><b>Tags(Please press enter)</b></label>
        @if ($jobProfile)
            @foreach ($tagArr as $tags)
                <input class="tagList" list="tagDataList" type="text" name="tags[][tagName]" value="{{$tags->tagName}}" autocomplete="off" >
            @endforeach
        @else
            <input class="tagList" list="tagDataList" type="text" name="tags[][tagName]" autocomplete="off" >
        @endif
        <datalist id="tagDataList">
           
        </datalist>
 -->
    </span>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="clearfix">
      <button type="submit" class="signupbtn">Submit</button>
    </div>
  </div>
</form>
	</body>

	<!-- <script type="text/javascript">
    var tagSearchUrl ="";
	$(window).ready( function(){

         $('.tagGrp').delegate(".tagList","keypress",function(e){
            var val= $(this).val();
            if(val.length<2 || e.which===13){
                return;
            }

            $.ajax({
                url : tagSearchUrl,
                type : "get",
                success : function(res) {
                   var dataList = $("#tagDataList");
                dataList.empty();
                    if(res.length) {
                        for(var i=0, len=res.length; i<len; i++) {
                            var optStr= "<option value='"+res[i].tagName+"'>"+res[i].tagName+"</option>";
                            var opt = $(optStr);
                            dataList.append(opt);
                        }
                    }
                }
             });
         });
     }
	);

    $(document).on("keydown", function (e) {
        if (e.which === 8 && !$(e.target).is("input, textarea")) {
            e.preventDefault();
        }
    });

    $('.tagGrp').delegate(".tagList","keydown", function(e){
        if((e.keyCode == 8 || e.keyCode == 46) && this.value==='' && $('.tagGrp .tagList').length>1){
            this.remove();
            $('.tagGrp .tagList')[$('.tagGrp .tagList').length -1].focus();
        }
    });

     $('.tagGrp').delegate(".tagList","keypress", function(e){
        if (e.keyCode == 13) {
            var newInput = $("<input name='tags[][tagName]' class='tagList' list='tagDataList'  type='text'>");
            $('.tagGrp').append(newInput);
            $(newInput).focus();
        }
    });

    $('.tagGrp').delegate(".tagList","input", function(e){
        this.value=this.value.toLowerCase();
    });

     $('#jobProfileAdmin').on('keyup keypress', function(e) {
          var keyCode = e.keyCode || e.which;
          if (keyCode === 13) { 
            e.preventDefault();
            return false;
          }
        });
	

	</script> -->

</html>