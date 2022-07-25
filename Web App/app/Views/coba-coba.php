                        <div class="form-group">
                            <select name="country" id="country" class="form-control input-lg">
                                <option value="">Select Country</option>
                                <?php
                                foreach($country as $row)
                                {
                                    echo '<option value="'.$row["country_id"].'">'.$row["country_name"].'</option>';
                                }
                                ?>
                            </select>
                        </div>
        
<script>

$(document).ready(function(){

    $('#country').change(function(){

        var country_id = $('#country').val();

        var action = 'get_sekolah';

        if(country_id != '')
        {
            $.ajax({
                url:"<?php echo base_url('/dynamic_dependent/action'); ?>",
                method:"POST",
                data:{country_id:country_id, action:action},
                dataType:"JSON",
                success:function(data)
                {
                    var html = '<option value="">Select State</option>';

                    for(var count = 0; count < data.length; count++)
                    {

                        html += '<option value="'+data[count].state_id+'">'+data[count].state_name+'</option>';

                    }

                    $('#state').html(html);
                }
            });
        }
        else
        {
            $('#state').val('');
        }
        $('#city').val('');
    });

    $('#state').change(function(){

        var state_id = $('#state').val();

        var action = 'get_city';

        if(state_id != '')
        {
            $.ajax({
                url:"<?php echo base_url('/dynamic_dependent/action'); ?>",
                method:"POST",
                data:{state_id:state_id, action:action},
                dataType:"JSON",
                success:function(data)
                {
                    var html = '<option value="">Select City</option>';

                    for(var count = 0; count < data.length; count++)
                    {
                        html += '<option value="'+data[count].city_id+'">'+data[count].city_name+'</option>';
                    }

                    $('#city').html(html);
                }
            });
        }
        else
        {
            $('#city').val('');
        }

    });

});

</script>