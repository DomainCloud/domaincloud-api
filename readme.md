# Welcome to the DomainCloud API

We divided our function into 3 types:
1.  Domain Functions
2.  DNS Functions
3.  Domain Forwarding Functions

# Domain Functions
This type include several actions, such as:

|Action|Description|
|--- |--- |
|RegisterDomain|Registration of a new domain|
|TransferDomain|Transfer a domain|
|RenewDomain|Renew a domain|
|[GetNameservers](https://github.com/DomainCloud/domaincloud-api/wiki/GetNameservers)|Return up to 5 nameservers that are set for the domain|
|SaveNameservers|Change a domains nameservers|
|GetRegistrarLock|Return the current lock status of a domain|
|SaveRegistrarLock|Activate/Non-activate lock status setting|
|GetContactDetails|Return WHOIS information|
|SaveContactDetails|Revised WHOIS information|
|GetEPPCode|Request EPP Code for a transfer out.|
|RegisterNameserver|Child nameserver registration|
|ModifyNameserver|Child nameserver modification|
|DeleteNameserver|Child nameserver deletion|
|RequestDelete|Domain deletion|
|UploadFile|Upload domain documents|
|GetCreditBalance|Retrieve reseller credit balance|
|GetTLDPricing|Retrieve reseller TLD pricing|

# DNS Functions
This type include several actions, such as:


|Action|Description|
|--- |--- |
|AddRecord|Add DNS Host Record|
|SaveRecords|Sumbitted changes to DNS Host Records information|
|DeleteRecord|Delete DNS Host Record|

# DF Functions
This type include several actions, such as:


|Action|Description|
|--- |--- |
|AddRecord|Add DF Record|
|SaveRecords|Sumbitted changes to DF Records information|
|DeleteRecord|Delete DF Record|