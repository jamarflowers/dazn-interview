<?php
    $page_name = "Welcome to your introduction to GOLANG";    
?>
<?php include("inc/header.php"); ?>
<div class="headbar">
    <?php echo $page_name ?>
</div>    
    <div id="window">
          <article>
               <p>
              <div class="title">What is GO?</div>
              <div class="content">
                  <p>
                  GO, also know as a GOLANG, is a robust language that has many general purpose and complex uses. Golang can achieve the same results of many high level languages.
                  and was not created entirely for the purpose of back-end servers. 
                  Go was an attempt to bridge the gap between languages like Python and C. It was also originally designed to be solely a systems language.
                  when programming in go, you will notice the similar C syntax.
                  </p>
                  <img src="inc/img/gogo.png"></img>
              </div>
              </p>
            <article>
              <div class="title">Why Golang?</div>
              <div class="content">
                  <P>
                  Golang makes it easier to produce maintainable code: 
                  Through the use of standardized formatting, naming  and 
                  minimalistic stylings, Golang allow the language of go easy to read and follow. GOlang's use of packages and strictly typed conventions allow
                  </P>
                  <p>
                    <br>
                    <br>
                    Concurrency and Multiplpe Core: Concurrency programming implies that any different code MAY execute at the exact same cycle. It means that things can possibly happen in parallel if multiple processors or a processor with multiple cores is available and the program is crafted correctly. Just adding threads does not imply concurrent execution.
                    <br>
                    <br>
                    Multi-core use: Multiple core use means, that a single CPU has multiple Processor cores that can execute threads or processes concurrently and typically appears as multiple processors to mainstream operating systems.
                  </p>
              </div>
              </p>              
          </article>
           <article>
            <p class="title">Who created GO?</p>
            <div class="content">
                  <p>
                      Golang started as a interal project at Google, spearhead in 2007 by Robert Griesemer, Rob Pike, and Ken Thompson. It is a compiled, statically typed language in the tradition of C, with garbage collection, limited structural typing, memory safety features and concurrent programming features.
                   </p>
                  <br>
                  <br>
                  <img src="inc/img/gocreators.png">
                    <p>Robert Griesemer, Rob Pike, and Ken Thompson.</p>
                  </img>
              </div>
          </article>
    </div>
<?php include("inc/footer.php"); ?>