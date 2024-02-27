Frequently Asked Questions
==========================

## What is the official UUP dump website address?
UUP dump officially operates under the https://uupdump.net address.

**We do not have any "trusted mirror".** All the unofficial sites are hosted without our knowledge nor authorization. These make use of a heavily modified version of our old code and may cause incorrect downloads. In addition, due to the way UUP dump is structured, it is extremely easy for these websites to inject malware in a non-obvious way.


## Where is the source code of the website?
The source code of the website has been made private due to the above concerns, as we do not wish to be liable for any damages caused by copies of UUP dump not hosted by us.

While the website code itself is no longer open source, many parts out of which it is made are.


## I want to retrieve some data from UUP dump in an automatic manner
For this purpose we host an official instance of the [UUP dump JSON API](https://git.uupdump.net/uup-dump/json-api). You can access it at https://api.uupdump.net.

For instruction how to use it, please refer to the documentation found in the repository.


## Which build do I choose?
This is a question only **you** can answer.


## Which build entry do I choose?
Most builds will be available as one of the following:
 * Cumulative Update (AKA „***Update** for [...]*”)
 * Feature Update (AKA „***Upgrade** to [...]*” or no special name at all)

If you want to create an updated image or you're not sure, choose the **Feature Update**.

So: _Cumulative Updates generally aren't very useful, avoid them._


## How do I choose Enterprise/Education or other editions?
Select their **base edition** first.

| Virtual Edition      	| Base Edition 	|
|----------------------	|--------------	|
| Enterprise           	| Pro          	|
| Education            	| Pro          	|
| Pro Education        	| Pro          	|
| Pro for Workstations 	| Pro          	|
| IoT Enterprise       	| Pro          	|
| Home Single Language 	| Home         	|

You can select the **virtual editions** after you choose to **add additional editions** (third **Download method**).


## "This build can't be converted to an ISO image."?
This means the chosen entry is **not** a complete build of Windows.

It's probably one of the following:
 * standalone update.
 * Server build without metadata

Those entries **cannot** be made into Windows images. Their files can sometimes be useful though.

If you see this on a regular build of Windows or Windows Server, that means it's metadata ESD is unavailable.


## "This build has known issues preventing the creation of a working ISO."?
This means the chosen entry contains some data, **but not all**, required to create a properly working Windows image.

While it would possible to build ISO image out of this entry, the Windows installation made out of it would be unusable.


## Debloat?
No. Don't.


## There's a build with a `(2)` in its name. What does this mean?
Most often that the build was pushed to more than one channel.

Alternatively this could be a build of a different release type that was mistaken for a duplicate.


## I received an ISO with a different version than one selected on the website
There are multiple causes of this:
 * You have unchecked the `Include updates` option on the download page
 * The conversion process has failed to include the updates
 * The conversion was done using Linux/macOS scripts, which do not support installing updates

To fix this issue you'll need to redo the conversion process and make sure that:
 * The `Include updates` option on the download page is checked
 * The conversion process did not report any errors
 * The conversion was done on Windows, preferably a modern version

Including updates is crucial to receive a version selected on the website due to the way UUP sets are provided by Microsoft.

An UUP set consists of the base build (typically .1 for releases, .1000 for previews), and updates for it, which bring it up to the desired version. That means, if you fail to include these updates, you'll receive a base build, not the one you selected.


## Help! My Windows copy is missing "Windows Security" app or "Settings" app does not open.
This applies only to Windows 11, version 22H2 and later.

A cause of this is a failed conversion process or a conversion done on an unsupported platform. You'll need to redo the process and reinstall Windows to fix this.

Alternatively if you don't want to reinstall or can't, you may try one of the following steps.

### Fix not working "Settings" app or a missing "Microsoft Store" app
Open the Command Prompt as an administrator and type `wsreset -i`. The issue should be fixed in a few minutes.

### Fix missing "Windows Security"
Go to the UUP dump page for the build you installed and using the **Browse files** section search for `SecHealthUI`. Download and install that `appx` package to fix the issue.
