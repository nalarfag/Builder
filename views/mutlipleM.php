
<?php 
$url= WP_PLUGIN_URL . '/GWU_Builder/images/MultiChoice.png';
$adminURL= admin_url('admin-post.php');
$QuestionNum= GWUQuestion::getNextQuestionNumber($_GET['Qid']);


require dirname(__FILE__) . '/Header.php';
?>
<div class='content_q'> 
        <form id="add_question"  method="post" action="<?php echo $adminURL; ?>">
	<input type="hidden" name="action" value="add_new_question" />
        <input type="hidden" name="answer_type" value="Multiple Choice, Multiple Value" />
        <input type="hidden" name="answer_type_short" value="multipleM" />
         <input type="hidden" name="QuestionnaireID" value="<?php echo $_GET['Qid']; ?>" />
            <table>
                 <tr>
                <td class="style1">
                    <img alt="" src=<?php echo $url; ?>
                         class="Sampleimage" />
                </td>
                </tr>
                
            <tr>
                <td class="style1">

                    Question Number:    
                    <input type="text" id="question_Number" name="question_Number" size="1" value="<?php echo $QuestionNum; ?>" />
                </td>
                <td><span class="val_qno"></span></td>
            </tr>
            <tr><td> <p>Question Text:</p></td></tr>
            <tr>
                <td class="style1">
                    <input type="text" id="question_text" name="question_text" size="50" />
                    
                </td>
                <td><span class="val_qtext"></span></td>
            </tr>
            <tr><td> Answers Choices:</td><td></td></tr>
            <tr>
               <td>


                    <div id="p_choices">
                        
                           <p> <label for="p_choices"><input type="text" id="p_choice_1"
                                                          size="50" name="p_choice[]" value="" 
                                                          placeholder="choice Value" /></label>
                           </p>
                           <p> <label for="p_choices"><input type="text" id="p_choice_2"
                                                          size="50" name="p_choice[]" value="" 
                                                          placeholder="choice Value" /></label>
                           </p>
                       

                    </div> 
                    <a class="add-new-h2" href="#"   id="addChoice">Add Another Choice</a>

                </td>
                <td>
                    <span class="val_qchoice"></span>
                </td>
            </tr>
            <tr>
                <td class="style1">Mandatory: 
                    <span>
                        <input id="Mandatory_1" name="Mandatory" class="element radio" type="radio" value="1" />
                        <label class="choice" for="Mandatory_1">yes</label>
                        <input id="Mandatory2" name="Mandatory" class="element radio" type="radio" value="0" />
                        <label class="choice" for="Mandatory_2">no</label>

                    </span> 

                </td>
            </tr>

            <tr>
                
            </tr>
            <tr>
                <td align="right">
                 
                   <input type="submit" name="close" value="Close" class="button-primary"/>
                    <input type="submit" name="saveAdd" value="Save and Add Another" class="button-primary"/>
                    <input type="submit" name="save" value="Save" class="button-primary"/>
                </td>
                <td></td>
            </tr>
  </table>
            
    </form>
</div>

<?php require dirname(__FILE__) . '/Footer.php'; ?>