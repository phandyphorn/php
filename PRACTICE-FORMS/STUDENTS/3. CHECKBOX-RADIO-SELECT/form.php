
<form action = "process.php" method="POST">
    <div class="mb-3">
        <select  class="form-control" name = "opt">
            <option selected disabled>Choose province</option>
            <option value="Banteay Mean Chey">Banteay Mean Chey</option>
            <option value="Battambang">Battambang</option>
            <option value="Siem Riep">Siem Riep</option>
            <option value="Prey Veng">Prey Veng</option>
        </select>
    </div>


    <div class="mb-3">
        <input type="checkbox" class="form-control-check" id="html" name="sub[]" value="HTML">
        <label for="html" class="form-label">HTML</label>

        <input type="checkbox" class="form-control-check" id="css" name="sub[]" value="CSS">
        <label for="css" class="form-label">CSS</label>

        <input type="checkbox" class="form-control-check" id="js" name="sub[]" value="JavaScript">
        <label for="js" class="form-label">Javascript</label>

        <input type="checkbox" class="form-control-check" id="php" name="sub[]" value="PHP">
        <label for="php" class="form-label">PHP</label>
    </div>


    <div class="mb-3">
        <input type="radio" class="form-control-check" name="gen" id="Female" value="Female" checked >
        <label for="Female" class="form-label">Female</label>

        <input type="radio" class="form-control-check" name="gen" id="Male" value="Male">
        <label for="Male" class="form-label">Male</label>
    </div>
   
    <div class="d-grid">
        <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
    </div>
</form>