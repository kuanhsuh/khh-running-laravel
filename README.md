[] address email
[] 一般會員/榮譽/理監事/
[] 會員編號


To set the value of a select element in Laravel, you can use the old function helper to retrieve the previously submitted value, or set a default value if none is set.

Here's an example code snippet:

bash
Copy code
<select name="gender" id="gender" class="mt-1 block w-full shadow-sm border-gray-300 rounded-md">
    <option value="男" {{ old('gender') == '男' ? 'selected' : '' }}>男</option>
    <option value="女" {{ old('gender') == '女' ? 'selected' : '' }}>女</option>
</select>
In the code above, we're using the old function to retrieve the previously submitted value for the gender field. We're then checking if the value matches each option, and setting the selected attribute accordingly.

If no previous value is set (i.e. it's a new form submission), then the old function will return null, and neither option will be selected. You can also provide a default value in case there is no previous value, like this:

bash
Copy code
<select name="gender" id="gender" class="mt-1 block w-full shadow-sm border-gray-300 rounded-md">
    <option value="男" {{ old('gender', '男') == '男' ? 'selected' : '' }}>男</option>
    <option value="女" {{ old('gender', '男') == '女' ? 'selected' : '' }}>女</option>
</select>
In this case, we're providing a default value of 男 as the second argument to the old function. If there is no previously submitted value, then old('gender', '男') will return 男, and the first option will be selected by default.
