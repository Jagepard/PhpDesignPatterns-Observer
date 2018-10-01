## Table of contents

- [\Behavioral\Observer\EventInterface (interface)](#interface-behavioralobservereventinterface)
- [\Behavioral\Observer\FootballEvent](#class-behavioralobserverfootballevent)
- [\Behavioral\Observer\FootballSubject](#class-behavioralobserverfootballsubject)
- [\Behavioral\Observer\ObserverInterface (interface)](#interface-behavioralobserverobserverinterface)
- [\Behavioral\Observer\SubjectInterface (interface)](#interface-behavioralobserversubjectinterface)
- [\Behavioral\Observer\FootballObserver](#class-behavioralobserverfootballobserver)

<hr />

### Interface: \Behavioral\Observer\EventInterface

> Interface EventInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getName()</strong> : <em>string</em> |

<hr />

### Class: \Behavioral\Observer\FootballEvent

> Class FootballEvent

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em><br /><em>FootballEvent constructor.</em> |
| public | <strong>getName()</strong> : <em>string</em> |

*This class implements [\Behavioral\Observer\EventInterface](#interface-behavioralobservereventinterface)*

<hr />

### Class: \Behavioral\Observer\FootballSubject

> Class FootballSubject

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em><br /><em>FootballSubject constructor.</em> |
| public | <strong>attachObserver(</strong><em>[\Behavioral\Observer\ObserverInterface](#interface-behavioralobserverobserverinterface)</em> <strong>$observer</strong>)</strong> : <em>void</em> |
| public | <strong>detachObserver(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em> |
| public | <strong>getName()</strong> : <em>mixed</em> |
| public | <strong>notify(</strong><em>[\Behavioral\Observer\EventInterface](#interface-behavioralobservereventinterface)</em> <strong>$event</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Observer\SubjectInterface](#interface-behavioralobserversubjectinterface)*

<hr />

### Interface: \Behavioral\Observer\ObserverInterface

> Interface ObserverInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getName()</strong> : <em>string</em> |

<hr />

### Interface: \Behavioral\Observer\SubjectInterface

> Interface SubjectInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>attachObserver(</strong><em>[\Behavioral\Observer\ObserverInterface](#interface-behavioralobserverobserverinterface)</em> <strong>$observer</strong>)</strong> : <em>void</em> |
| public | <strong>detachObserver(</strong><em>\string</em> <strong>$observerName</strong>)</strong> : <em>void</em> |
| public | <strong>notify(</strong><em>[\Behavioral\Observer\EventInterface](#interface-behavioralobservereventinterface)</em> <strong>$event</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Observer\FootballObserver

> Class FootballObserver

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em><br /><em>FootballObserver constructor.</em> |
| public | <strong>getName()</strong> : <em>string</em> |

*This class implements [\Behavioral\Observer\ObserverInterface](#interface-behavioralobserverobserverinterface)*
