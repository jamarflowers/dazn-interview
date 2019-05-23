<?php

    $page_name = "ARRAYS SLICES AND MAPS";    

?>
<?php include("inc/header.php"); ?>
<div class="headbar">
    <?php echo $page_name ?>
</div>    
      <div id="window">
          <article>
              <div class="title">Arrays</div>
              <div class="content">
                  <p>
                    An array is a numbered sequence of elements of a single type with a fixed length. In Go they look like this:
                    <br>
                    <kbd>var x [5]int</kbd>
                    <br>
                    <br>
                    x is an example of an array which is composed of 5 ints.
                  <kbd>
                    <br>
                    var x [5]float64
                    <br>
                    x[0] = 98
                    <br>
                    x[1] = 93
                    <br>
                    x[2] = 77
                    <br>
                    x[3] = 82
                    <br>
                    x[4] = 83
                    <br>


                    x := [5]float64{
                      98,
                      93,
                      77,
                      82,
                      83,
                    }
                  </kbd>  
                  </p>
              </div>
          </article>
          <article>

              <div class="title">Slices</div>
              <div class="content">
                  <p>
                    

                    A slice is a segment of an array. Like arrays slices are indexable and have a length. Unlike arrays this length is allowed to change. Here's an example of a slice:
                    <br>
                    <div class="center">
                      <kbd>
                    var x []float64
                      </kbd>
                    </div>
                    <br>  
                    The only difference between a slice and an array is the missing length between the brackets. In this case x has been created with a length of 0.
                    <br> 
                    If you want to create a slice you should use the built-in make function:
                    <br> 
                    <div class="center">
                      <kbd>
                    x := make([]float64, 5)
                     </kbd>
                     </div>
                     <br> 
                    This creates a slice that is associated with an underlying float64 array of length 5. Slices are always associated with some array, and although they can never be longer than the array, they can be smaller. The make function also allows a 3rd parameter:
                     <br> 
                     <div class="center">
                     <kbd>
                    x := make([]float64, 5, 10)
                     </kbd>
                     </div>
                     <br>
                     <br>
                    10 represents the capacity of the underlying array which the slice points to:
                    Another way to create slices is to use the [low : high] expression:
                     <br>
                    <br>
                    <div class="center">
                     <kbd>
                    arr := [5]float64{1,2,3,4,5}
                     <br>
                    x := arr[0:5]
                     </kbd>
                     </div>
                      <br>
                       <br>
                    low is the index of where to start the slice and high is the index where to end it (but not including the index itself). For example while arr[0:5] returns [1,2,3,4,5], arr[1:4] returns [2,3,4].
                    
                    For convenience we are also allowed to omit low, high or even both low and high. arr[0:] is the same as arr[0:len(arr)], arr[:5] is the same as arr[0:5] and arr[:] is the same as arr[0:len(arr)].
                     <br>
                  </div>
          </article>
          <article>

              <div class="title">Maps</div>
              <div class="content">
                  <p>
                    
                        A map is an unordered collection of key-value pairs. Also known as an associative array, a hash table or a dictionary, maps are used to look up a value by its associated key. Here's an example of a map in Go:
                         <br>
                         <div class="center">
                         <kbd>
                        var x map[string]int
                         </kbd>
                         </div>
                         <br>
                          <p>
                          The map type is represented by the keyword map, followed by the key type in brackets and finally the value type. If you were to read this out loud you would say “x is a map of strings to ints.”
                          
                          Like arrays and slices maps can be accessed using brackets. Try running the following program:
                          </p>
                          <div class="center"> 
                         <br>
                         <kbd>
                        var x map[string]int
                        x["key"] = 10
                        fmt.Println(x)
                         </kbd>
                         <br>
                        <kbd>
                        elements := map[string]string{
                        
                         <br>
                          "H":  "Hydrogen",
                           <br>
                          "He": "Helium",
                           <br>
                          "Li": "Lithium",
                           <br>
                          "Be": "Beryllium",
                           <br>
                          "B":  "Boron",
                           <br>
                          "C":  "Carbon",
                           <br>
                          "N":  "Nitrogen",
                           <br>
                          "O":  "Oxygen",
                           <br>
                          "F":  "Fluorine",
                           <br>
                          "Ne": "Neon
                          <br>
                        }
                       <br>
                    </kbd>    
                  </p>
                  </div>
                  
                   <p>
                    Maps are also often used to store general information. Let's modify our program so that instead of just storing the name of the element we store its standard state (state at room temperature) as well:
                    <br>
                    <div class="center">  
                      <kbd> 
                        func main() {
                          <br>
                          elements := map[string]map[string]string{
                            <br>
                            "H": map[string]string{
                              <br>
                              "name":"Hydrogen",
                              <br>
                              "state":"gas",<br>
                            },<br>
                            <br>
                            "He": map[string]string{
                              <br>
                              "name":"Helium",
                              <br>
                              "state":"gas",
                            <br>
                            },
                            <br>
                            "Li": map[string]string{
                              <br>
                              "name":"Lithium",
                              <br>
                              "state":"solid",
                             <br>
                            },
                            <br>
                            "Be": map[string]string{
                              <br>
                              "name":"Beryllium",
                              <br>
                              "state":"solid",
                              <br>
                            },
                            <br>
                            "B":  map[string]string{
                              <br>
                              "name":"Boron",
                              <br>
                              "state":"solid",
                              <br>
                            },<br>
                            <br>
                            "C":  map[string]string{
                            <br>
                              "name":"Carbon",
                              <br>
                              "state":"solid",
                              <br>
                            },<br>
                            "N":  map[string]string{<br>
                            <br>
                              "name":"Nitrogen",
                              <br>
                              "state":"gas",
                            <br>
                            },<br>
                            "O":  map[string]string{<br>
                              "name":"Oxygen",<br>
                              "state":"gas",<br>
                            },<br>
                            "F":  map[string]string{<br>
                              "name":"Fluorine",<br>
                              "state":"gas",<br>
                            },<br>
                            "Ne":  map[string]string{<br>
                              "name":"Neon",<br>
                              "state":"gas",<br>
                            },<br>
                          }<br>
                        
                        }  
                      </kbd>
                      </div>
                  </p>
              </div>
          </article>
      </div>    
</div>    
<?php include("inc/footer.php"); ?>





