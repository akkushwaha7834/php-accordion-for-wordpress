<?php $fields = CFS()->get('faqs');
 echo '<div class="accordion accordion-flush" id="accordionFlushExample">';
  foreach ($fields as $field) { 
    echo '<div class="accordion-item">';
    echo '<h2 class="accordion-header" id="'. $field['faqs_number'].'">';
    echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#'. $field['faqs_collapse'].'" aria-expanded="false" aria-controls="'. $field['faqs_collapse'].'">';
    echo $field['faq_questions'];
    echo '</button>';
    echo '</h2>';
    echo '<div id="'. $field['faqs_collapse'].'" class="accordion-collapse collapse" aria-labelledby="'. $field['faqs_number'].'" data-bs-parent="#accordionFlushExample">';
    echo '<div class="accordion-body">'. $field['faqs_answers'] . '</div>';
    echo '</div>';
    echo '</div>';
   } 
  echo '</div>';
?>