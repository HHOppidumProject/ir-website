<section id="highlights" class="wrapper style3">
    <?php if (!$isSuccessful) { ?>
        <h2 class="title is-2">Sign Up</h2>
        <?php
        echo $this->Form->create($civis, ['id' => 'cives']);

        $praenomenArray = array();
        foreach ($praenomina as $praenomen) {
            $praenomenArray[strval($praenomen->PRAENOMENID)] = ["id" => strval($praenomen->PRAENOMENID), "male" => $praenomen->MALE, "female" => $praenomen->FEMALE];
        }

        $nomenArray = array();
        foreach ($nomina as $nomen) {
            $nomenArray[strval($nomen->NOMENID)] = ["id" => strval($nomen->NOMENID), "male" => $nomen->NOMEN, "female" => $nomen->GENS];
        }

        $cognomenArray = array();
        foreach ($cognomina as $cognomen) {
            $cognomenArray[strval($cognomen->COGNOMENID)] = ["id" => strval($cognomen->COGNOMENID), "male" => $cognomen->MALE, "female" => $cognomen->FEMALE];
        }

        $countryArray = array();
        foreach ($countries as $country) {
            $stateArray = array();
            foreach ($country->state_to_provincia as $state) {
                $stateArray[strval($state->STATEID)] = ["id" => strval($state->STATEID), "state" => $state->STATENAME];
            }
            $countryArray[strval($country->COUNTRYID)] = ["id" => strval($country->COUNTRYID), "countryName" => $country->COUNTRYNAME, "states" => $stateArray];
        }

        ?>

        <div class="has-text-centered" style="width: 75%; max-width: 75%; margin: auto;">
            <h4 class="subtitle is-4">Already a citizen? <?= $this->Html->link('Login', ['action' => 'login'])    ?></h4>
            <div>
                <h5 class="is-subtitle is-5">Any questions? Check out the <?= $this->Html->link('FAQ', ['action' => 'faq'])    ?>!</h2>
            </div>

            <?php
            echo '<label>Email</label>';
            echo $this->Form->email('EMAIL');

            echo '<label>Password</label>';
            echo $this->Form->password('PASSWORDHASH');

            echo '<label>Forename</label>';
            echo $this->Form->text('cives_priv.FORENAME');

            echo '<label>Surname</label>';
            echo $this->Form->text('cives_priv.SURNAME');

            echo '<label>Gender</label>';
            echo $this->Form->text('GENDER');

            echo '<label>Preferred Word Gender</label>';
            echo $this->Form->select('PREFFEREDWORDGENDER', [0 => 'Male', 1 => 'Female'], ['id' => 'preferredWordGender']);

            echo '<label>Date of Birth</label>';
            echo $this->Form->date('DOB');

            echo '<label>Street Address</label>';
            echo $this->Form->text('cives_priv.ADDRESS');

            echo '<label>City</label>';
            echo $this->Form->text('cives_priv.CITY');

            echo '<label>Country</label>';
            $countryValueArray = [];
            foreach ($countryArray as $country) :
                $countryValueArray[$country["id"]] = $country["countryName"];
            endforeach;
            echo $this->Form->select('cives_priv.StateToProvincia.Countries.COUNTRYID', $countryValueArray, ['id' => 'country']);

            echo '<label>State/Province</label>';

            echo $this->Form->select('cives_priv.STATE_PROVINCE', [], ['id' => 'state']);

            echo '<label>Phone Number</label>';
            echo $this->Form->tel('cives_priv.PHONE_NUMBER', ['id' => 'phone', 'class' => 'is-normal has-text-centered']);

            echo '<label>Postcode</label>';
            echo $this->Form->text('cives_priv.POSTCODE_ZIP');

            echo '<label>Occupation</label>';
            echo $this->Form->text('cives_priv.OCCUPATION');

            echo '<label>Praenomen</label>';
            $maleArrayPraenomina = [];
            foreach ($praenomenArray as $praenomen) :
                $maleArrayPraenomina[$praenomen["id"]] = $praenomen["male"];
            endforeach;
            echo $this->Form->select('praenomina.PRAENOMEN', $maleArrayPraenomina, ['id' => 'praenomen']);

            echo '<label>Nomen</label>';
            $maleArrayNomina = [];
            foreach ($nomenArray as $nomen) :
                $maleArrayNomina[$nomen["id"]] = $nomen["male"];
            endforeach;
            echo $this->Form->select('nomina.NOMEN', $maleArrayNomina, ['id' => 'nomen']);

            echo '<label>Cognomen</label>';
            $maleArrayCognomina = [];
            foreach ($cognomenArray as $cognomen) :
                $maleArrayCognomina[$cognomen["id"]] = $cognomen["male"];
            endforeach;
            echo $this->Form->select('cognomina.COGNOMEN', $maleArrayCognomina, ['id' => 'cognomen']);

            echo $this->Form->button('submit', ['type' => 'submit', 'class' => 'btn btn-primary', 'style' => 'padding: 1em; margin: 1em;']);
            ?>
        </div>

        <?= $this->Html->script("intlTelInput.js"); ?>
        <script>
            $('document').ready(() => {
                var input = document.querySelector("#phone");
                var phoneInput = window.intlTelInput(input, {
                    separateDialCode: true,
                    customContainer: 'custom-forum-group',
                    utilsScript: '/js/utils.js'
                });

                $("#cives").submit(function() {
                    const dialcode = $('.iti__selected-dial-code').text();
                    const number = $("#phone").val();
                    $("#phone").val(dialcode.concat(number));
                    $("#NOMEN").val($("#nomen").val());
                    $("#PRAENOMEN").val($("#praenomen").val());
                    $("#COGNOMEN").val($("#cognomen").val());
                });

                var praenomenMale = <?php echo json_encode($maleArrayPraenomina); ?>;

                var praenomenFemale = <?php
                                        $femaleArrayPraenomina = [];
                                        foreach ($praenomenArray as $praenomen) :
                                            $femaleArrayPraenomina[$praenomen["id"]] = $praenomen["female"];
                                        endforeach;
                                        echo json_encode($femaleArrayPraenomina);
                                        ?>;

                var nomenMale = <?php echo json_encode($maleArrayNomina); ?>;

                var nomenFemale = <?php
                                    $femaleArrayNomina = [];
                                    foreach ($nomenArray as $nomen) :
                                        $femaleArrayNomina[$nomen["id"]] = $nomen["female"];
                                    endforeach;
                                    echo json_encode($femaleArrayNomina);
                                    ?>;

                var cognomenMale = <?php echo json_encode($maleArrayCognomina); ?>;

                var cognomenFemale = <?php
                                        $femaleArrayCognomina = [];
                                        foreach ($cognomenArray as $cognomen) :
                                            $femaleArrayCognomina[$cognomen["id"]] = $cognomen["female"];
                                        endforeach;
                                        echo json_encode($femaleArrayCognomina);
                                        ?>;

                var countryArray = <?php
                                    echo json_encode($countryArray)
                                    ?>;

                $('#country').ready(function() {
                    state = $('#state');
                    state.empty();
                    $.each(countryArray[$('#country').val()]['states'], function(index, json) {
                        state.append($('<option>', {
                            value: json['id'],
                            text: json['state']
                        }))
                    });
                });

                $('#country').change(function() {
                    state = $('#state');
                    state.empty();
                    $.each(countryArray[$('#country').val()]['states'], function(index, json) {
                        state.append($('<option>', {
                            value: json['id'],
                            text: json['state']
                        }))
                    });
                });

                $('#preferredWordGender').change(function() {
                    if (parseInt($(this).val()) === 1) {
                        $("#praenomen").empty();
                        $("#nomen").empty();
                        $("#cognomen").empty();
                        Object.entries(praenomenFemale).forEach(([key, value]) => $('#praenomen').append($('<option>', {
                            value: key,
                            text: value
                        })));
                        Object.entries(nomenFemale).forEach(([key, value]) => $('#nomen').append($('<option>', {
                            value: key,
                            text: value
                        })));
                        Object.entries(cognomenFemale).forEach(([key, value]) => $('#cognomen').append($('<option>', {
                            value: key,
                            text: value
                        })));

                    } else {
                        $("#praenomen").empty();
                        $("#nomen").empty();
                        $("#cognomen").empty();
                        Object.entries(praenomenMale).forEach(([key, value]) => $('#praenomen').append($('<option>', {
                            value: key,
                            text: value
                        })));
                        Object.entries(nomenMale).forEach(([key, value]) => $('#nomen').append($('<option>', {
                            value: key,
                            text: value
                        })));
                        Object.entries(cognomenMale).forEach(([key, value]) => $('#cognomen').append($('<option>', {
                            value: key,
                            text: value
                        })));
                    }
                });
            });
        </script>

        <?php echo $this->Form->hidden("PRAENOMEN", ['id' => 'PRAENOMEN']);
        echo $this->Form->hidden("NOMEN", ['id' => 'NOMEN']);
        echo $this->Form->hidden("COGNOMEN", ['id' => 'COGNOMEN']); ?>
        <?= $this->Form->end(); ?>
    <?php } else { ?>
        <h1 class="title">You're almost there!</h1>
        <div class="jumbotron has-text-centered">
            <h4>Your data has been forwarded to the Imperivm. Do not resubmit or attempt to login, just await a response. You should get a response in the next 24 hours!</h4>
            <h4>Remember, this email can end up in your junk folder, please check there!</h4>
        </div>
    <?php } ?>
</section>

<?= $this->Html->css(['intlTelInput.css', 'signup.css']) ?>