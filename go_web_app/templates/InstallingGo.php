<?php

    $page_name = "INSTALLING GO";    

?>
<?php include("inc/header.php"); ?>
<div class="headbar">
    <?php echo $page_name ?>
</div>    
      <div id="window">
          <article>
             <div class="title">Where Do I Begin?</div>
             <div class="content">
                <p>
                    Installing GO is a fairly easy and simple process. whether your system is windows, Mac OS or linux/unix based enviorment. Go has managed to create binary distributions for 
                    each system. When ready to begin programming in go, head on over to the golang website <a href="www.golang.org/dl">golang.org</a> look through the list of package downloads and find your corresponding package for your computer.
                </p>
                <br>
                <br>
                <img src="inc/img/downloadpkg.png"></img>
                <br>
              </div>
          </article>
           <article>
         
              <div class="title">Creating A Go Workspace?</div>
              <div class="content">
                <p> 
                After installing your go packages, you will need to create a go workspace to run your "gocode". Your Go workspace is where all of your code packages and binaries will live when runing and compiling a go program.
                
                first your want to create a root folder to hold your workspace folders (i.e SRC,PKG,BIN).
                <br>
                <br>
                <ul>
                    <li>src - contains Go source files organized into packages (one package per directory)</li>
                    <li>pkg -  contains package objects</li>
                    <li>bin - contains executable commands</li>
                </ul>
                <br>
                <P>
                MKDIR - :GoCode<br>
                MKDIR - :GoCode/bin<br>
                MKDIR - :GoCode/pkg<br>
                MKDIR - :GoCode/src<br>
                </P>
                <img class="folders" src="inc/img/folders.png"></img>
                </p>
              </div>
          </article>
          <article>
              <div class="title">GoROOT and GoPATH?</div>
              <div class="content">
                  <p>
                    The GOPATH is the environment variable that lists places to look for Go code and the GOROOT is 
                    the workspace for your gocode.
                     <div class="codeBlock">
                  <strong>export GOROOT=</strong>
                  <br>
                  <strong>export GOPATH=</strong> c:/GoCode
                  <br>
                  
              </div>
                  </p>
              </div>
          </article>
          <article>
              <div class="title">Testing your installation.</div>
              <div class="content">
              <p>      
                  After installing your GO on your system, you can test to see if your go-tools have installed properly.
         
                  you can either choose to run "go help" or "go env". In this Example we ran go env.
              </p>  
             </article>
          <article>
           
           <img class="img" src="inc/img/goenv.png">
           GO ENV, shows us where we have set up our environment variables.
           </img>      
              
           </article>
      </div>  
<?php include("inc/footer.php"); ?>