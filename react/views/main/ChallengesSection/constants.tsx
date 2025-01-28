import { Heading4, EmphasizedText } from 'src/ui-kit';
import { ChallengeType } from 'src/types';

export const CHALENGES_LIST_CONFIG: ChallengeType[] = [
  {
    id: 'cto_on_staff',
    title: (
      <Heading4>
        Can't afford a <EmphasizedText title="CTO on staff" />
      </Heading4>
    ),
  },
  {
    id: 'where_to_start',
    title: (
      <Heading4>
        Looking to build an app but
        <EmphasizedText title=" don't know where to start" />
      </Heading4>
    ),
  },
  {
    id: 'legacy_app',
    title: (
      <Heading4>
        <EmphasizedText title="Legacy applications " />
        are dragging the business
        <EmphasizedText title=" down" />
      </Heading4>
    ),
  },
  {
    id: 'hiring',
    title: (
      <Heading4>
        <EmphasizedText title="Hiring " />
        expert software engineers
        <EmphasizedText title=" is taking too much timef" />
      </Heading4>
    ),
  },
];
