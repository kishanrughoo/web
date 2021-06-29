<div class="search-bar">

        <!--search-input------->
        <!--Creating the search bar -->
        
        <form action="../../backend/searchbar/search.php" method="post" style="width:700px;">
                <div class="container-fluid d-flex">
                    <input class="form-control me-2" type="search" placeholder="search" size="30" onkeyup="showResult(this.value)" aria-label="Search" name="search">
                    
                    <button type="submit" class="btn btn-outline-success" name="submit">Search</button>
                    <!-- cancel-btn---> 
                    <!--Cancel button will erase everything written in the search bar-->
                    <span><a style="float:right; padding-left:20px;" href="#" class="search-cancel"><i class="fas fa-times"></i></a></span>
                </div>
                <div id="livesearch" style="z-index:999; position:absolute; width:400px"></div>
        </form>
</div>