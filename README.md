# action-provider-addon

[![CI](https://github.com/reflexive-communications/action-provider-addon/actions/workflows/main.yml/badge.svg)](https://github.com/reflexive-communications/action-provider-addon/actions/workflows/main.yml)

This extension provides extra actions for the action-provider extension.

**Actions**

- `Setup Organization And Relationship`: action for creating relationships between an organization (identified by name) and a contact (identified by contact id). The relationship could be configured.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.3+
* CiviCRM (v5.37+)

## Installation

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/reflexive-communications/action-provider-addon.git
cv en action_provider_addon
```
