<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel MongoDB Users API</title>
    {{-- Fontawesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!-- inspired by https://adobe.ly/3KSkgPx -->
    <aside>
        <ul class="ul-cards">
            <li style="--accent-color: #68AFFF">
                <div class="icon"><i class="fa-solid fa-users"></i></div>
                <div class="title">GET ALL USERS</div>
                <div class="content">
                    <button class="btn btn-sm btn-primary">GET ALL USERS</button>
                </div>
            </li>
            <li style="--accent-color: #FFA44B">
                <div class="icon"><i class="fa-solid fa-user"></i></div>
                <div class="title">GET SINGLE USER</div>
                <div class="content">
                    <button class="btn btn-sm btn-warning">GET SINGLE USER</button>
                </div>
            </li>
            <li style="--accent-color: #EF6968">
                <div class="icon"><i class="fa-solid fa-user-plus"></i></div>
                <div class="title">CREATE USER</div>
                <div class="content">
                    <button class="btn btn-sm btn-success">CREATE USER</button>
                </div>
            </li>
            <li style="--accent-color: #0ED2D1">
                <div class="icon"><i class="fa-solid fa-trash"></i></div>
                <div class="title">DELETE USER</div>
                <div class="content">
                    <button class="btn btn-sm btn-danger">DELETE USER</button>
                </div>
            </li>
            <li style="--accent-color: #c66fa7">
                <div class="icon"><i class="fa-solid fa-refresh"></i></div>
                <div class="title">UPDATE USER</div>
                <div class="content">
                    <button class="btn btn-sm btn-success">UPDATE USER</button>
                </div>
            </li>
        </ul>
    </aside>
    <main style=" margin-left: 15rem;">
        <div class="container">
            <div class="col-md-12">
                <h5 style="--accent-color: #68AFFF" class="title">CREATE USER</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="email" class="form-control" placeholder="Jhon">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Last Name</label>
                            <input type="email" class="form-control" placeholder="EFE">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">User Name</label>
                            <input type="email" class="form-control" placeholder="efeibrahimm">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" placeholder="name@example.com">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Last Name</label>
                            <input type="email" class="form-control" placeholder="EFE">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">User Type</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Admin</option>
                              <option>Super Admin</option>
                              <option>User</option>
                              <option>Viewer</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Gender</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Male</option>
                              <option>Female</option>
                              <option>Other</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Image</label>
                           <input class="form-control" type="file">
                          </div>
                    </div>
                    <div class="col-md-12 pt-4 d-flex" >
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </div>
            </div>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="profile-img">
                                <img src="" alt="" class="img-circle">
                            </div>
                            <div class="content" style="display: flex; justify-content: space-between">
                                <span class="item"><i class="fa fa-paw"></i> İbrahim EFE</span>
                                <span class="item"><i class="fa fa-atom"></i> @efeibrahimm</span>
                                <span class="item"><i class="fa fa-envelope"></i> ibrahim.efee@hotmail.com</span>
                            </div>
                        </li>
                       
                      </ul>
                  </div>
              </div>
          </div>
    </main>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
