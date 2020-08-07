## Table of contents

- [\Behavioral\Observer\EventInterface (interface)](#interface-behavioralobservereventinterface)
- [\Behavioral\Observer\FootballEvent](#class-behavioralobserverfootballevent)
- [\Behavioral\Observer\FootballObserver](#class-behavioralobserverfootballobserver)
- [\Behavioral\Observer\FootballSubject](#class-behavioralobserverfootballsubject)
- [\Behavioral\Observer\ObserverInterface (interface)](#interface-behavioralobserverobserverinterface)
- [\Behavioral\Observer\SubjectInterface (interface)](#interface-behavioralobserversubjectinterface)

<hr />

### Interface: \Behavioral\Observer\EventInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getName()</strong> : <em>mixed</em> |

<hr />

### Class: \Behavioral\Observer\FootballEvent

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em> |
| public | <strong>getName()</strong> : <em>mixed</em> |

*This class implements [\Behavioral\Observer\EventInterface](#interface-behavioralobservereventinterface)*

<hr />

### Class: \Behavioral\Observer\FootballObserver

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em> |
| public | <strong>getName()</strong> : <em>mixed</em> |

*This class implements [\Behavioral\Observer\ObserverInterface](#interface-behavioralobserverobserverinterface)*

<hr />

### Class: \Behavioral\Observer\FootballSubject

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em> |
| public | <strong>attachObserver(</strong><em>[\Behavioral\Observer\ObserverInterface](#interface-behavioralobserverobserverinterface)</em> <strong>$observer</strong>)</strong> : <em>void</em> |
| public | <strong>detachObserver(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em> |
| public | <strong>getName()</strong> : <em>mixed</em> |
| public | <strong>notifyObservers(</strong><em>[\Behavioral\Observer\EventInterface](#interface-behavioralobservereventinterface)</em> <strong>$event</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Observer\SubjectInterface](#interface-behavioralobserversubjectinterface)*

<hr />

### Interface: \Behavioral\Observer\ObserverInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getName()</strong> : <em>mixed</em> |

<hr />

### Interface: \Behavioral\Observer\SubjectInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>attachObserver(</strong><em>[\Behavioral\Observer\ObserverInterface](#interface-behavioralobserverobserverinterface)</em> <strong>$observer</strong>)</strong> : <em>void</em> |
| public | <strong>detachObserver(</strong><em>\string</em> <strong>$observerName</strong>)</strong> : <em>void</em> |
| public | <strong>notifyObservers(</strong><em>[\Behavioral\Observer\EventInterface](#interface-behavioralobservereventinterface)</em> <strong>$event</strong>)</strong> : <em>void</em> |

