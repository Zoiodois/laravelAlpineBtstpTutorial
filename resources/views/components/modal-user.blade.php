<div x-data="__user" @open-user-modal.window="openModal">
    <div class="modal fade" tabindex="-1" id="modal-user">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <span>Cadastro:</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <template x-if="success">
                    <span class="alter alert-success text-center mt-3" x-text="success"></span>
                </template>
                <template x-if="processing">
                    <div style="width:50px; height:50px; text-align:center">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><radialGradient id="a9" cx=".66" fx=".66" cy=".3125" fy=".3125" gradientTransform="scale(1.5)"><stop offset="0" stop-color="#FF156D"></stop><stop offset=".3" stop-color="#FF156D" stop-opacity=".9"></stop><stop offset=".6" stop-color="#FF156D" stop-opacity=".6"></stop><stop offset=".8" stop-color="#FF156D" stop-opacity=".3"></stop><stop offset="1" stop-color="#FF156D" stop-opacity="0"></stop></radialGradient><circle transform-origin="center" fill="none" stroke="url(#a9)" stroke-width="15" stroke-linecap="round" stroke-dasharray="200 1000" stroke-dashoffset="0" cx="100" cy="100" r="70"><animateTransform type="rotate" attributeName="transform" calcMode="spline" dur="2" values="360;0" keyTimes="0;1" keySplines="0 0 1 1" repeatCount="indefinite"></animateTransform></circle><circle transform-origin="center" fill="none" opacity=".2" stroke="#FF156D" stroke-width="15" stroke-linecap="round" cx="100" cy="100" r="70"></circle></svg>
                    </div>
                </template>

                <form x-on:submit.prevent="send">
                    <div class="modal-body">

                        <label for="form-name" class="form-label">Your Name</label>
                        <template x-if="errors.name">
                            <span class="text text-danger" x-text="errors.name"></span>
                        </template>
                        <input type="text" x-model="user.name" class="form-control" placeholder="Your Name">

                        <label for="form-email" class="form-label">Your Email</label>
                        <template x-if="errors.email">
                            <span class="text text-danger" x-text="errors.email"></span>
                        </template>
                        <input type="email" x-model="user.email" class="form-control" placeholder="Your Email">
                        <template x-if="!user.id">
                            <div>

                                <label for="form-password" class="form-label">Your Password</label>
                                <template x-if="errors.password">
                                    <span class="text text-danger" x-text="errors.password"></span>
                                </template>
                                <input type="password" x-model="user.password" class="form-control"
                                placeholder="Your Password">
                            </div>
                        </template>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-decondary" data-bs-dismiss="modal"> Close</button>
                        <button type="submit" class="btn btn-primary" x-text="user.id ? 'Update User' : 'Create User'"> </button>
                     
                    </div>

                </form>



            </div>
        </div>
    </div>
</div>
