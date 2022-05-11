<div class="row">
    test
    @role('admin')
        <br />
        I am a admin role!
    @endrole

    @hasrole('admin')
        <br />
        I am a admin hasrole!
    @endhasrole

    @hasanyrole('admin|vendor')
        <br />
        I am either a admin or an vendor or both hasanyrole!
    @endhasanyrole

    <br />
    {{ Auth::user() }}
    <br />
    {{ Auth::user()->name }}
    <br />
    {{ Auth::user()->getRoleNames() }}
</div>
