<div class="mb-2">
    <label for="email" class="form-label" > Nombre del Rol</label>
    <div class="form-group has-feedback">
        <input type="text" class="form-control" required name="name" value = "{{ isset($role) ? $role->name : old('name') }}">
    </div>
    @error('name')
        <span style="font-size: small; text-color: red "> {{ $message }} </span>
    @enderror
</div>

        {{-- <div class="mb-2">
            <label for="email" class="form-label" >Guard Name</label>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" required name="guard_name" value = "{{ old('guard_name') }}">
            </div>
            @error('guard_name')
                <span style="font-size: small; "> {{ $message }} </span>
            @enderror

        </div> --}}
<div class="row">
    <label for="name" class="col-sm-2 col-form-label mr-2 text-center">Permisos</label> <br/>
    <div class="col-sm-7">
        <div class="form-group">
            <div class="tab-content">
              <div class="tab-pane active">
                <table class="table mt-3">
                  <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="permissions[]"
                              value="{{ $permission->id }}"
                              {{isset($role) ? ($role->permissions->contains($permission->id)? 'checked' :'') :'' }}>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>
                        {{ $permission->name }}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>

