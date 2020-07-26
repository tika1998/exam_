$(document).ready(() => {
    $('#createForm').validate(({
        rules: {
            name: {
                required: true,
                minLength: 20
            },
            createBy: 'required',
            assignedTo: 'required'
        },

        messages: {
            name: {
                required: 'Enter Task Name true',
                minLength: 'min length 20',
            },
            createBy: 'Create By is required',
            assignedTo: 'Assigned Tois required',
        }
    }))

})
