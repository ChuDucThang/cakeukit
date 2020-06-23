<div class="top-page">
    <ul class="uk-breadcrumb ui dividing header">
        <li><a href="">Dashboard</a></li>
        <li><a href="">User</a></li>
    </ul>

    <ul uk-accordion="multiple: true">
        <li class="uk-open">
            <a class="uk-accordion-title" href="#">Search</a>
            <div class="ui equal width form uk-accordion-content">
                <div class="fields">
                    <div class="field">
                        <label><?=h('Name');?></label>
                        <div class="ui focus input">
                            <input type="text" placeholder="<?=h('First Name');?>">
                        </div>
                    </div>
                    <div class="field">
                        <label>&nbsp;</label>
                        <div class="ui focus input">
                            <input type="text" placeholder="<?=h('Last Name');?>">
                        </div>
                    </div>
                    <div class="field">
                        <label><?=h('Phone');?></label>
                        <div class="ui focus input">
                            <input type="text" placeholder="<?=h('Phone');?>">
                        </div>
                    </div>
                    <div class="field">
                        <label><?=h('Address');?></label>
                        <div class="ui focus input">
                            <input type="text" placeholder="<?=h('Address');?>">
                        </div>
                    </div>
                </div>

                <div class="fields">
                    <div class="field">
                        <label><?=h('Date');?></label>
                        <div class="ui focus input">
                            <input type="date" placeholder="<?=h('Date');?>">
                        </div>
                    </div>
                    <div class="field">
                        <label>&nbsp;</label>
                        <div class="ui toggle checkbox">
                            <input type="checkbox" true-value="1" false-value="0">
                            <label><?=h('Is deleted');?></label>
                        </div>
                    </div>
                    <div class="field"></div>
                    <div class="field"></div>
                </div>

                <div class="fields">
                    <hr class="uk-divider-icon" />
                </div>

                <div class="fields">
                    <label>&nbsp;</label>
                    <div class="uk-position-bottom-right">
                        <div class="ui mini buttons">
                            <button class="ui button" @click="resetSearch()"><?=h('Reset');?></button>
                            <div class="or"></div>
                            <button class="ui positive button"><?=h('Search');?></button>
                            <div class="or"></div>
                            <button class="ui violet button"><?=h('Export');?></button>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="uk-auto">
    <table class="uk-table uk-table-hover uk-table-divider">
        <thead>
            <tr>
                <th class="uk-table-shrink">STT</th>
                <th class="uk-table-shrink">Fullname</th>
                <th class="uk-table-shrink">Email</th>
                <th class="uk-table-shrink">Phone</th>
                <th class="uk-table-shrink">Address</th>
                <th class="uk-table-shrink">Birthday</th>
                <th class="uk-table-shrink">Avatar</th>
                <th class="uk-table-shrink">
                    <button class="uk-button uk-button-primary uk-button-small" @click="addData()">Add User</button>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(user, index) in users">
                <td class="uk-table-shrink">{{index+1}}</td>
                <td class="uk-table-shrink">{{user.first_name}} {{user.last_name}}</td>
                <td class="uk-table-shrink">{{user.email}}</td>
                <td class="uk-table-shrink">{{user.phone}}</td>
                <td class="uk-table-shrink">{{user.address}}</td>
                <td class="uk-table-shrink">{{user.birth_date}}</td>
                <td class="uk-table-shrink">{{user.avatar_path}}</td>
                <td class="uk-table-shrink">
                    <a title="Edit" @click="editData(user.id)" data-uk-tooltip><i class="edit icon"></i></a>
                    <a style="color:red" title="Delete" @click="deleteComfirm(user.id)" data-uk-tooltip><i
                            class="trash alternate icon"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="ui modal" id="detailModal">
    <i class="close icon" @click="close()" style="top: 10px; right: 10px; color: black"></i>
    <div class="header">
        User Details
    </div>
    <div class="content">
        <div class="ui equal width form">
            <div class="fields">
                <div class="field">
                    <label><?=h('First Name');?></label>
                    <div class="ui focus input">
                        <input type="text" v-model="usersDetail.first_name" placeholder="<?=h('First Name');?>">
                    </div>
                </div>
                <div class="field">
                    <label><?=h('Last Name');?></label>
                    <div class="ui focus input">
                        <input type="text" v-model="usersDetail.last_name" placeholder="<?=h('Last Name');?>">
                    </div>
                </div>
            </div>
            <div class="fields">
                <div class="field">
                    <label><?=h('Code');?></label>
                    <div class="ui focus input">
                        <input type="text" v-model="usersDetail.account_code" placeholder="<?=h('Code');?>">
                    </div>
                </div>
                <div class="field">
                    <label><?=h('Email');?></label>
                    <div class="ui focus input">
                        <input type="text" v-model="usersDetail.email" placeholder="<?=h('Email');?>">
                    </div>
                </div>
            </div>
            <div class="fields">
                <div class="field">
                    <label><?=h('Address');?></label>
                    <div class="ui focus input">
                        <input type="text" v-model="usersDetail.address" placeholder="<?=h('Address');?>">
                    </div>
                </div>
                <div class="field">
                    <label><?=h('Phone');?></label>
                    <div class="ui focus input">
                        <input type="text" v-model="usersDetail.phone" placeholder="<?=h('Phone');?>">
                    </div>
                </div>
            </div>
            <div class="fields">
                <div class="field">
                    <label><?=h('Birthday');?></label>
                    <div class="ui focus input">
                        <input type="date" v-model="usersDetail.birth_date">
                    </div>
                </div>
                <div class="field">
                    <label><?=h('Permission');?></label>
                    <div class="ui focus input">
                        <select class="ui dropdown" id="permission" v-model="usersDetail.role_type">
                            <option value="">Select</option>
                            <option value="0">Quan tri vien</option>
                            <option value="1">Nhan vien</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="fields">
                <div class="field">
                    <label><?=h('Avatar');?></label>
                    <div class="ui focus input">
                        <input type="file" @change="previewImg" multiple>
                    </div>
                </div>
                <div class="field">
                    <label>&nbsp;</label>
                    <div class="ui focus input">
                        <img src="https://image.shutterstock.com/image-photo/bright-spring-view-cameo-island-260nw-1048185397.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="actions">
        <button class="ui mini teal button" @click="saveData()"><i class="edit icon"></i>Save</button>
        <button class="ui mini default button" @click="close()">Cancel</button>
    </div>
</div>
<div class="ui mini modal" id="deleteModal">
    <i class="close icon" style="top: 10px; right: 10px; color: black"></i>
    <div class="ui header red">
        Delete User Item
    </div>
    <div class="content" style="text-align:center">
        <h3>Are you sure ?</h3>
    </div>
    <div class="actions">
        <button class="ui mini red button" @click="deleteData()">Delete</button>
    </div>
</div>

<?php $this->start("scriptcontent");?>
<script>
new Vue({
    mixins: [mixin],
    el: '#app',
    data() {
        return {
            users: [],
            usersDetail: {
                id: '',
                first_name: '',
                last_name: '',
                account_code: '',
                birth_date: '',
                email: '',
                phone: '',
                address: '',
                avatar_path: '',
                role_type: ''
            },
            userId: ''
        }
    },
    created() {},
    mounted() {
        this.getData();
        $('#permission').dropdown();
    },
    updated() {

    },
    computed: {
        now: function() {
            return Date.now();
        }
    },
    methods: {
        addData() {
            $('#detailModal').modal('show');
        },
        async getData() {
            let response;
            response = await this.API('GET', 'users/list');
            if (response.status_code === '200') {
                this.users = response.data;
                this.showSuccessToast(response.message);
            }
        },
        async refeshData() {
            let response;
            response = await this.API('GET', 'users/list');
            if (response.status_code === '200') {
                this.users = response.data;
            }
        },
        async editData(id) {
            let response;
            response = await this.API('GET', 'users/get', null, {
                id: id
            });
            if (response.status_code === '200') {
                this.usersDetail = response.data;
            }
            $('#permission').dropdown('set selected', this.usersDetail.role_type);
            $('#detailModal').modal('show');
        },
        async saveData() {
            let response;
            response = await this.API('POST', 'users/save', this.usersDetail);
            if (response.status_code === '200') {
                this.showSuccessToast(response.message);
                this.usersDeatil = {
                    first_name: '',
                    last_name: '',
                    account_code: '',
                    email: '',
                    address: '',
                    phone: '',
                    birth_date: '',
                    role_type: '',
                    avatar_path: ''
                };
                this.refeshData();
                $('#detailModal').modal('hide');
            } else {
                this.showErrorToast(response.message);
            }
        },
        deleteComfirm(id) {
            this.userId = id;
            $('#deleteModal').modal('show');
        },
        async deleteData() {
            let response;
            response = await this.API('POST', 'users/delete', {
                id: this.userId
            });
            if (response.status_code === '200') {
                this.showSuccessToast(response.message);
            } else {
                this.showErrorToast(response.message);
            }
            this.refeshData();
            $('#deleteModal').modal('hide');
        },
        resetSearch() {
            this.showSuccessToast('Reset Search');
        },
        previewImg(event) {
            console.log(event.target.files);
        },
        close() {
            this.usersDetail = {
                first_name: '',
                last_name: '',
                account_code: '',
                email: '',
                address: '',
                phone: '',
                birth_date: '',
                role_type: '',
                avatar_path: ''
            };
            $('.ui.modal').modal('hide');
        }
    }
});
</script>
<?php $this->end(); ?>