#Install-Module -Name MicrosoftTeams -RequiredVersion 4.9.1
Connect-MicrosoftTeams 
New-Team -DisplayName "Aliso16" -Description "Bienvenidos"
New-TeamChannel -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -DisplayName "Canal16-1"
New-TeamChannel -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -DisplayName "Canal16-2"
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico08@javiteran20.onmicrosoft.com
#Get-TeamChannelUser -GroupId 2f162b0e-36d2-4e15-8ba3-ba229cecdccf -DisplayName "Engineering" -Role Owner
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico01@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico02@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico03@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico04@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico05@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico06@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico07@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico08@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico09@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico10@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico11@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico12@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico13@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico14@javiteran20.onmicrosoft.com
Add-TeamUser -GroupId 745eaef5-7a02-409b-b8cf-8c7edf707a65 -User tecnico15@javiteran20.onmicrosoft.com
#Get-TeamChannelUser -GroupId 2f162b0e-36d2-4e15-8ba3-ba229cecdccf -DisplayName "Engineering" -Role Owner


Get-TeamUser -GroupId d82d753d-00b9-4541-91ef-42a126464fec

install module azureADconnect-azureADget-azureADUser