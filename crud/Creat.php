<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creat</title>
</head>

<body>



    <div
        class="modal fade "
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #FFD900; color: #20252A;">
                    <h5 class="modal-title text-center" id="exampleModalLabel" style=" color: #20252A;">Ajouter un Neuveux PLayer</h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color: aliceblue; background-color: #20252A;">

                    <div id="error"></div>

                    <form id="form" action="/dashboard.php" style="color: aliceblue; background-color: #20252A;">



                        <div class="mb-3">
                            <label for="Name" class="form-label">Name:</label>
                            <input type="text" id="Name" class="form-control" style="color: aliceblue; background-color: #20252A;" />
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">photo:</label>
                            <input
                                type="file"
                                id="photo"
                                class="form-control"
                                accept="image/*"
                                style="color: aliceblue; background-color: #20252A;" />
                        </div>

                        <div class="mb-3">
                            <label for="position">position:</label>
                            <select id="position" class="form-select" style="color: aliceblue; background-color: #20252A;">
                                <option value="RW">RW</option>
                                <option value="ST">ST</option>
                                <option value="CM">CM</option>
                                <option value="LW">LW</option>
                                <option value="GK">GK</option>
                                <option value="CDM">CDM</option>
                                <option value="CB">CB</option>
                                <option value="LB">LB</option>
                                <option value="RB">RB</option>
                            </select>
                        </div>


                    </form>
                </div>
                <div class="modal-footer" style="color: aliceblue; background-color: #20252A;">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">
                        Close
                    </button>
                    <button id="submit" type="button" class="btn " style="background-color: #FFD900; color: #20252A;">
                        submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>