# Welcome to the DomainCloud API

We divided our function into 3 types:
1.  Domain Functions
2.  DNS Functions
3.  Domain Forwarding Functions

# Domain Functions
This type include several actions, such as:

|Action|Description|Documentation|
|--- |--- |--- |
|RegisterDomain|Registration of a new domain|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/RegisterDomain)|
|TransferDomain|Transfer a domain|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/TransferDomain)|
|RenewDomain|Renew a domain|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/RenewDomain)|
|GetNameservers|Return up to 5 nameservers that are set for the domain|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetNameservers)|
|SaveNameservers|Change a domains nameservers|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/SaveNameservers)|
|GetRegistrarLock|Return the current lock status of a domain|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetRegistrarLockStatus)|
|SaveRegistrarLock|Activate/Non-activate lock status setting|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/SaveRegistrarLock)|
|GetContactDetails|Return WHOIS information|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetContactDetails)|
|SaveContactDetails|Revised WHOIS information|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/SaveContactDetails)|
|GetEPPCode|Request EPP Code for a transfer out.|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetEPPCode)|
|RegisterNameserver|Child nameserver registration|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/RegisterNameserver)|
|ModifyNameserver|Child nameserver modification|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/ModifyNameserver)|
|DeleteNameserver|Child nameserver deletion|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DeleteNameserver)|
|RequestDelete|Domain deletion|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/RequestDelete)|
|UploadFile|Upload domain documents|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/UploadFile)|
|GetCreditBalance|Retrieve reseller credit balance|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetCreditBalance)|
|GetTLDPricing|Retrieve reseller TLD pricing|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetTLDPricing)|

# DNS Functions
This type include several actions, such as:


|Action|Description|Documentation|
|--- |--- |--- |
|GetRecords|Return the DNS Records|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DNS-GetRecords)|
|AddRecord|Add DNS Host Record|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DNS-AddRecord)|
|SaveRecords|Sumbitted changes to DNS Host Records information|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DNS-SaveRecords)|
|DeleteRecord|Delete DNS Host Record|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DNS-DeleteRecord)|

# DF Functions
This type include several actions, such as:


|Action|Description|Documentation|
|--- |--- |--- |
|GetRecords|Return the Domain Forwarding Records|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DF-GetRecords)|
|AddRecord|Add DF Record|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DF-AddRecord)|
|SaveRecords|Sumbitted changes to DF Records information|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DF-SaveRecords)|
|DeleteRecord|Delete DF Record|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DF-DeleteRecord)|