<?php

    $page_name = "GO PACKAGES";    

?>





<?php include("inc/header.php"); ?>
<div class="headbar">
    <?php echo $page_name ?>
</div>    
      <div id="window">
          <article>
          
              <div class="title">What are Go package?</div>
              <div class="content">
                  In Go, source files are organized into system directories called packages, which enable code reusability across the Go applications. The naming convention for Go package is to use the name of the system directory where we are putting our Go source files. Within a single folder, the package name will be same for the all source files which belong to that directory. We develop our Go programs in the $GOPATH directory, where we organize source code files into directories as packages. In Go packages, all identifiers will be exported to other packages if the first letter of the identifier name starts with an uppercase letter. The functions and types will not be exported to other packages if we start with a lowercase letter for the identifier name.

                  Go’s standard library comes with lot of useful packages which can be used for building real-world applications. For example, the standard library provides a “net/http” package which can be used for building web applications and web services. The packages from the standard library are available at the “pkg” subdirectory of the GOROOT directory. When you install Go, an environment variable GOROOT will be automatically added to your system for specifying the Go installer directory. 
              </div>
              <br>
              <div class="codeBlock">
                  
                  
                  	<strong>import</strong>"fmt"<br>
	                <strong>import</strong>"io/ioutil"
       
              </div>
                  
          </article>
           <article>
             
              <div class="title">Package Main</div>
              <div class="content">
                  
                When you build reusable pieces of code, you will develop a package as a shared library. But when you develop executable programs, you will use the package “main” for making the package as an executable program. The package “main” tells the Go compiler that the package should compile as an executable program instead of a shared library. The main function in the package “main” will be the entry point of our executable program. When you build shared libraries, you will not have any main package and main function in the package.
                
                Here’s a sample executable program that uses package main in which the function main is the entry point.
              </div>
              <br>
                <img class="pmain" src="inc/img/pmain.png"></img>
                           
          </article>
          <article>
              <p>
              <div class="title">Import Packages</div>
              <div class="content">
                  The keyword “import” is used for importing a package into other packages. In the Code above 
                  we have imported the package “fmt” into the fizzbuzz program for using the function Println. The package “fmt” comes from the 
                  Go standard library. When you import packages, the Go compiler will look on the locations specified by the environment variable GOROOT and GOPATH. 
                  Packages from the standard library are available in the GOROOT location. The packages that are created by yourself, and third-party packages which you have imported, 
                  are available in the GOPATH location.
              </div>
              </p>              
          </article>
           <article>
              <p>
              <div class="title">Using Packages</div>
              <div class="content">
                  The keyword “import” is used for importing a package into other packages. In the Code above 
                  we have imported the package “fmt” into the fizzbuzz program for using the function Println. The package “fmt” comes from the 
                  Go standard library. When you import packages, the Go compiler will look on the locations specified by the environment variable GOROOT and GOPATH. 
                  Packages from the standard library are available in the GOROOT location. The packages that are created by yourself, and third-party packages which you have imported, 
                  are available in the GOPATH location.
              </div>
              </p>              
          </article>
           
      </div>    
</div>    
<?php include("inc/footer.php"); ?>




 
