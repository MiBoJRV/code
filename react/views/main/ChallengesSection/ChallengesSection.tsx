import React from 'react';
import { TextBracketLeftIcon, TextBracketRightIcon } from 'src/assets/icons';
import { PageSection, Heading2, StrongText } from 'src/ui-kit';
import { ChallengesListItem } from 'src/components';
import { CHALENGES_LIST_CONFIG } from './constants';

export const ChallengesSection: React.FC = (): JSX.Element => (
  <PageSection>
    <Heading2 className="flex flex-wrap items-center justify-center text-center">
      <span>Do you recognize</span>
      <span className="pl-3">these</span>
      <div className="relative px-5 lg:px-9">
        <TextBracketLeftIcon className="absolute top-1 left-2 h-12 lg:h-20 lg:left-4" />
        <StrongText title="challenges" />
        <TextBracketRightIcon className="absolute top-1 right-2 h-12 lg:h-20 lg:right-4" />
      </div>
      <span> ?</span>
    </Heading2>
    <ul className="text-h2-mob pt-14 items-center md:flex md:flex-col lg:pt-20">
      {CHALENGES_LIST_CONFIG.map((challenge) => (
        <ChallengesListItem key={challenge.id} {...challenge} />
      ))}
    </ul>
  </PageSection>
);
